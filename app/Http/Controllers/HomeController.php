<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function showHome(){
        $author = DB::table('users')->where('role', '=' ,'2')
                ->inRandomOrder()
                ->limit(2)
                ->get();
        $article = DB::table('articles')
            ->inRandomOrder()
            ->limit(10)
            ->get();
        dd($author, $article->first()->judul);

        return view('home');
    }
}
