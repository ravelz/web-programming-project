<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class CreateArticleController extends Controller
{
    public function show(){
        return view('article');
        // buat nampiling semua artikelnya 
    }

    public function create(){
        return view('create_article');
    }

    public function store(Request $request){
        $deskripsi = $request->deskripsi;
        $user = Auth::User()->id_user;
        $last_id_article =  Article::select('id_article')->orderBy('id_article', 'desc')->first();
        if(!$last_id_article){
            $idArtc = "ART1";
        }else{
            $idArtc = (int)substr($last_id_article, -3);
            $idArtc = 'ART'.$idArtc+1;
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
        return view('article');
    }
}
