<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\User;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Support\Str;
use Carbon\Carbon;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showHome(){
        

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
    }

    public function getAuthor(){
        $authors = User::where('role', '2')->inRandomOrder()->limit(3)->get();
        return $authors;
    }

    public function getTag(){
        $tags = Tag::inRandomOrder()->limit(10)->get();
        return $tags;
    }

    public function getPopularArticle(){
        $articles = Article::inRandomORder()->limit(10)->get();
        // $product = User::findOrFail($id);
        foreach ($articles as $article) {
            $article->deskripsi = Str::limit($article->deskripsi, 150);
            $article->differenceDate = Carbon::now()->diffInDays(Carbon::parse($article->tgl_publish));
            $article->authorName = User::select('name')->where('id_user', $article->id_user)->first()->name;
        }
        
        return $articles;
    }

    public function getFollowedArticle(){
        $joinFollow = DB::table('users')
        ->where('users.id_user', '=', Auth::id())
        ->join('followers', 'users.id_user', '=', 'followers.id_user_m')
        ->select('followers.id_user_f', 'articles.*')
        ->join('articles', 'followers.id_user_f', '=', 'articles.id_user')
        ->inRandomOrder()
        ->limit(3) //Jangan dilimit nanti kalo frontendnya udah bener
        ->get();

        return $joinFollow;

    }
    
    public function index()
    {
        $authors = $this->getAuthor();
        $tags = $this->getTag();
        $articles = $this->getPopularArticle();
        return view('Home/home')
        ->with('authors', $authors)
        ->with('tags', $tags)
        ->with('popularArticles', $articles)
        ->with('followedArticles', $this->getFollowedArticle());
    }

    
}
