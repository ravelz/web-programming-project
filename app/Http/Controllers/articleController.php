<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class articleController extends Controller
{
    public function like($id, $judul){
        $like = DB::table('articles')
                ->where('articles.id_article', '=', $id)
                ->where('articles.judul', '=', $judul)
                ->value('jml_like');

        $add_like = $like + 1; 

        DB::table('articles')
            ->where('articles.id_article', '=', $id)
            ->where('articles.judul', '=', $judul)
            ->update(['jml_like' => $add_like]);
        
        return redirect()->route('read', ['id'=>$id, 'judul'=>$judul]);
    }
}
