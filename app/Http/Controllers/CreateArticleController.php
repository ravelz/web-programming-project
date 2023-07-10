<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Article;
use App\Models\DetailTag;
use App\Models\Tag;
use App\Models\Bookmark;
use App\Models\Draft;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Symfony\Contracts\Service\Attribute\Required;
use URL;

class CreateArticleController extends Controller
{
    public function show(){
        $articles = DB::table('articles')
                    ->join('users', 'users.id_user', '=', 'articles.id_user')
                    ->get();
        $articles = $this->getDifferenceDate($articles);
        foreach ($articles as $article) {
            $article->authorName = User::select('name')->where('id_user', $article->id_user)->first()->name;
        }
        return view('listArticles')
        ->with('articles', $articles)
        
        ;
    }

    public function getDifferenceDate($collections){
        foreach ($collections as $collection) {
            $collection->deskripsi = Str::limit($collection->deskripsi, 150);
            $collection->differenceDate = Carbon::now()->diffInDays(Carbon::parse($collection->tgl_publish));
        }
        return $collections;
    }

    public function create(){
        return view('create_article');
    }

    public function store(Request $request){
        $data = $request->all();
        $user = Auth::User()->id_user;

        $last_id_article =  Article::select('id_article')->orderBy('id_article', 'desc')->count();
        $idArticle = (int)substr($last_id_article, -3);

        if($idArticle == 0){
            $idArtc = "ART001";
        }else{
            $idArtc = 'ART'.str_pad($idArticle+1, 3, '0', STR_PAD_LEFT);
        }  

        //GET ISI ARTIKEL
        $deskripsi = $request->deskripsi;

        //UBAH INPUT TAG JADI LOWERCASE
        $converted = explode(',', $request->Tag);
        // dd($converted); 

        $rules = [
            'Judul' => 'required',
            'Thumbnail' => 'required|image|mimes:jpg,jpeg,png',
            'Tag' => 'required|min:1',
            'deskripsi' => 'required'
        ];

        $message = [
            'required' => ':attribute wajib diisi',
            'min' => 'Jumlah minimal :attribute adalah :min',
            'mimes' => 'Format :attribute harus JPG,JPEG, atau PNG '
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        foreach($converted as &$key){
            $key = Str::lower($key);
            $key = trim($key);
        }

        //CEK SEMUA INPUT APAKAH UDH EXIST DI TAG
        $array = [];
        foreach($converted as &$key){
            //INPUT ID TAG
            $last_idtag = Tag::select('id_tag')->orderBy('id_tag', 'desc')->count();
            $id_tag = (int)substr($last_idtag, -3);

            if($id_tag == 0){
                $idtag = "TAG001";
            } 

            $condition = Tag::where('title_tag', '=', $key)->first();
            if($condition){
                array_push($array, $condition->id_tag);
            }
            else{
                $idtag = 'TAG'.str_pad($id_tag+1, 3, '0', STR_PAD_LEFT);
                Tag::create([
                    'id_tag' => $idtag,
                    'title_tag' => $key
                ]);
                array_push($array, $idtag);
            }
        }

        $image = $request->file('Thumbnail');
        $imageName = $request->Judul.'.'.$image->getClientOriginalExtension();
        $moveImg = Storage::disk('public')->putFileAs('uploads/', $image, $imageName);
        
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }else{
            $article = Article::create([
                'id_article' => $idArtc,
                'judul' => $request->Judul,
                'tgl_publish' => Carbon::now()->toDateTimeString(),
                'jml_comment' => 0,
                'id_user' => $user,
                'membership' => 1,
                'deskripsi' => $deskripsi,
                'jml_like' => 0 ,
                'thumbnail' => $imageName
            ]);
        }

        foreach($array as &$key){
            $value2 = [
                'id_tag' =>$key, 
                'id_article' =>$idArtc
            ];
            DetailTag::create($value2);
        }

        return redirect('article');
    }

    public function uploadImage(Request $request): JsonResponse{
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
      
            $request->file('upload')->move(public_path('media'), $fileName);
      
            $url = asset('media/' . $fileName);
  
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }

    public function readArticle($id, $judul){
        $read = DB::table('articles')
                ->join('users', 'users.id_user', '=', 'articles.id_user')
                ->select('users.*','articles.*',)
                ->where([
                    ['articles.id_article', '=', $id],
                    ['articles.judul', '=', $judul]
                ])
                ->selectRaw(
                    'DATE_FORMAT(articles.tgl_publish, \'%W, %d %M %Y\') AS date_publish'
                )
                ->get();   

        $tag = DB::table('articles')
                ->join('users', 'users.id_user', '=', 'articles.id_user')
                ->join('detailtags', 'detailtags.id_article', '=', 'articles.id_article')
                ->join('tags', 'tags.id_tag', '=', 'detailtags.id_tag')
                ->select('tags.*')
                ->where([
                    ['articles.id_article', '=', $id],
                    ['articles.judul', '=', $judul]
                ])
                ->get();
                    
        $comment = DB::table('comments')
                    ->join('articles', 'comments.id_article', '=', 'articles.id_article')
                    ->join('users', 'users.id_user', '=', 'comments.id_user')
                    ->select('comments.*', 'users.id_user', 'users.name', 'users.username', 'users.profile_picture')
                    ->where([
                        ['articles.id_article', '=', $id],
                        ['articles.judul', '=', $judul]
                    ])->get();

        // dd($comment);
        $shareButtons1 = \Share::page(
                        URL::current(),
                        $read[0]->judul
                    )
                    ->facebook()
                    ->whatsapp()
                    ->twitter();
                  
        return view('article', [
            'read'=>$read[0], 
            'comment'=>$comment,
            'tag'=>$tag,
            'share'=>$shareButtons1
        ])->with('popularArticles', $this->getPopularArticle());
                           
    }


    public function getPopularArticle(){
        $articles = Article::inRandomORder()->limit(10)->get();
        $articles = $this->getDifferenceDate($articles);
        foreach ($articles as $article) {
            $user = User::select('name', 'username', 'profile_picture')->where('id_user', $article->id_user)->first();
            // dd($user);
            $article->authorName = $user->name;
            $article->username = $user->username;
            $article->profile_picture = $user->profile_picture;
        }
        // dd($articles);
        
        
        return $articles;
    }

    public function bookmark($id){
        try{
            $follow = Bookmark::create([
                'id_user' => Auth::id(),
                'id_article' => $id
            ]);
        }catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;

            return back()->withErrors(['msg' => 'Article sudah ada di bookmark!']);
        }
        return back()->withErrors(['msg' => 'Bookmark berhasil ditambahkan']);;
    }

    public function draft(Request $request){
        $user = Auth::User()->id_user;

        $last_id_draft =  Draft::select('id_draft')->orderBy('id_draft', 'desc')->count();
        $draft = (int)substr($last_id_draft, -3);

        if($draft == 0){
            $idDraft = "D001";
        }else{
            $idDraft = 'D'.str_pad($draft+1, 3, '0', STR_PAD_LEFT);
        }

        $image = $request->file('Thumbnail');
        $imageName = $request->Judul.'.'.$image->getClientOriginalExtension();
        $moveImg = Storage::disk('public')->putFileAs('uploads/', $image, $imageName);

        $rules1 = [
            'Judul' => 'required',
            'Thumbnail' => 'nullable|image|mimes:jpg,jpeg,png',
            'Tag' => 'nullable',
            'deskripsi' => 'nullable'
        ];  

        $message1 = [
            'required' => ':attribute wajib diisi',
            'min' => 'Jumlah minimal :attribute adalah :min',
            'mimes' => 'Format :attribute harus JPG,JPEG, atau PNG '    
        ];

        $validator = Validator::make($request->all(), $rules1, $message1);

        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }else{
            $article = Draft::create([
                'id_draft' => $idDraft,
                'judul' => $request->Judul,
                'id_user' => $user,
                'deskripsi' => $request->deskripsi,
                'thumbnail' => $imageName,
                'tag' => $request->Tag
            ]);
        }

        $dataDraft = DB::table('drafts')
                    ->where('drafts.id_user', '=', $user)
                    ->get();

        $dataDraft = $this->getDifferenceDate1($dataDraft);
        // dd($dataDraft);
        return view('listdraft', ['dataDraft'=>$dataDraft]);
    }

    public function getDifferenceDate1($collections){
        foreach ($collections as $collection) {
            $collection->deskripsi = Str::limit($collection->deskripsi, 150);
            $collection->differenceDate = Carbon::now()->diffInDays(Carbon::parse($collection->created_at));
        }
        return $collections;
    }

    public function listDraft(){
        $user = Auth::User()->id_user;
        $dataDraft = DB::table('drafts')
                    ->where('drafts.id_user', '=', $user)
                    ->get();

        $dataDraft = $this->getDifferenceDate1($dataDraft);
        return view('listDraft', ['dataDraft'=>$dataDraft]);
    }

}
