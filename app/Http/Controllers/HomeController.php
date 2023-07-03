<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

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

        $joinFollow = DB::table('users')
        ->where('users.id_user', '=', Auth::id())
        ->join('followers', 'users.id_user', '=', 'followers.id_user_m')
        ->select('followers.id_user_f', 'articles.*')
        ->join('articles', 'followers.id_user_f', '=', 'articles.id_user')
        ->inRandomOrder()
        ->limit(10)
        ->get();

        $readList = DB::table('bookmarks')
        ->where('bookmarks.id_user', '=', Auth::id())
        ->join('users', 'users.id_user', '=', 'bookmarks.id_user')
        ->inRandomOrder()
        ->limit(5)
        ->get();

        dd($author, $article->first()->judul, $joinFollow, Auth::id(), $readList);

        return view('home');
    }
}
