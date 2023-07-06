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
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        return view('listArticles')->with('articles', $articles);
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

        //INPUT USER ID
        $last_id_article =  Article::select('id_article')->orderBy('id_article', 'desc')->count();
        $idArticle = (int)substr($last_id_article, -3);

        if($idArticle == 0){
            $idArtc = "ART001";
        }else{
            $idArtc = 'ART'.str_pad($idArticle+1, 3, '0', STR_PAD_LEFT);
        }

        //INPUT ID TAG
        $last_idtag = Tag::select('id_tag')->orderBy('id_tag', 'desc')->count();
        $id_tag = (int)substr($last_idtag, -3);

        if($id_tag == 0){
            $idtag = "TAG001";
        }

        //GET ISI ARTIKEL
        $deskripsi = $request->deskripsi;

        //THUMBNAIL

        $image = $request->file('image');
        $imageName = $request->judul.'.'.$image->getClientOriginalExtension();
        $moveImg = Storage::disk('public')->putFileAs('uploads/', $image, $imageName);

        //MASUKKIN ARTIKEL KE DATABASE
        $article = Article::create([
            'id_article' => $idArtc,
            'judul' => $request->judul,
            'tgl_publish' => Carbon::now()->toDateTimeString(),
            'jml_comment' => 0,
            'id_user' => $user,
            'status_member' => 0,
            'deskripsi' => $deskripsi,
            'jml_like' => 0 ,
            'thumbnail' => $imageName
        ]);

        //UBAH INPUT TAG JADI LOWERCASE
        foreach($data['inputs'] as &$key){
            $key['name'] = Str::lower($key['name']);
        }   

        //CEK SEMUA INPUT APAKAH UDH EXIST DI TAG
        $array = array();
        foreach($data['inputs'] as &$key){
            $condition = Tag::where('title_tag', '=', $key['name'])->first();
            if($condition){
                array_push($array, $condition->id_tag);
            }
            else{
                $idtag = 'TAG'.str_pad($id_tag+1, 3, '0', STR_PAD_LEFT);
                Tag::create([
                    'id_tag' => $idtag,
                    'title_tag' => $key['name']
                ]);
                array_push($array, $idtag);
            }
        }

        //MASUKKIN DATA BY LOOPING ARRAY KE DETAIL TAG

        foreach($array as &$key){
            $value2 = [
                'id_tag' =>$key, 
                'id_article' =>$idArtc
            ];
            DetailTag::create($value2);
        }

        return redirect('article');
    }

    public function imageUpload(Request $request): JsonResponse{
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

                ;
        $comment = DB::table('comments')
                    ->join('articles', 'comments.id_article', '=', 'articles.id_article')
                    ->join('users', 'users.id_user', '=', 'articles.id_user')
                    ->where([
                        ['articles.id_article', '=', $id],
                        ['articles.judul', '=', $judul]
                    ])->get();

        // dd($read[0]->id_article);
        return view('article', [
            'read'=>$read[0], 
            'comment'=>$comment,
            'tag'=>$tag
        ]);
                           
    }



    public function bookmark($id){
        // dd($id);
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

}
