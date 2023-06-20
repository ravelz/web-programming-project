<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreateArticleController extends Controller
{
    public function show(){
        $articles = DB::table('articles')->get();
        return view('listArticles')->with('articles', $articles);
    }

    public function create(){
        return view('create_article');
    }

    public function store(Request $request){
        $deskripsi = $request->deskripsi;
        $user = Auth::User()->id_user;
        $last_id_article =  Article::select('id_article')->orderBy('id_article', 'desc')->count();

        if($last_id_article == 0){
            $idArtc = "ART001";
        }else{
            $idArtc = (int)substr($last_id_article, -3);
            $idArtc = 'ART'.str_pad($idArtc+1, 3, '0', STR_PAD_LEFT);
        }

        $article = Article::create([
            'id_article' => $idArtc,
            'judul' => $request->judul,
            'tgl_publish' => Carbon::now()->toDateTimeString(),
            'jml_comment' => 0,
            'id_user' => $user,
            'status_member' => 0,
            'deskripsi' => $deskripsi,
            'jml_like' => 0 
        ]);
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
                ->where([
                    ['articles.id_article', '=', $id],
                    ['articles.judul', '=', $judul]
                ])->get();   
        return view('article')->with('read', $read);                       
    }
}
