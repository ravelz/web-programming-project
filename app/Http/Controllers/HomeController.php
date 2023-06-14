<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\User;
use App\Models\Article;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showHome(){
        $authors = User::where('role', '2')->inRandomOrder()->limit(2)->get();

        $articles = Article::inRandomORder()->limit(10)->get();

        

        $joinFollow = DB::table('users')
        ->where('users.id_user', '=', Auth::id())
        ->join('followers', 'users.id_user', '=', 'followers.id_user_m')
        ->select('followers.id_user_f', 'articles.*')
        ->join('articles', 'followers.id_user_f', '=', 'articles.id_user')
        ->inRandomOrder()
        ->get();

        $joinFollows = User::find(Auth::id())->followers;

        foreach($joinFollows as $caption)
        {
            $providers_arr[] = Article::find($caption->pivot);
        }

        $providers_collection = collect($providers_arr)->unique();

        // $oji = '';
        // foreach($joinFollows as $join){
        //     $oji = $join->id_user_m;
        // }

        $readList = DB::table('bookmarks')
        ->where('bookmarks.id_user', '=', Auth::id())
        ->join('users', 'users.id_user', '=', 'bookmarks.id_user')
        ->inRandomOrder()
        ->limit(5)
        ->get();

        dd($joinFollows, $joinFollow, $providers_collection, $joinFollow, Auth::id(), $readList);
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
