<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon; 
use Illuminate\Support\Facades\DB;

class DiscoverArticleController extends Controller
{
    public function getAuthor(){
        $authors = User::where('role', '2')->inRandomOrder()->paginate(5);
        return $authors;
    }

    public function getTag(){
        $tags = Tag::inRandomOrder()->paginate(10);
        return $tags;
    }

    public function getClickedTag($tagName){
        $taggedArticle = DB::table('detailtags')
        ->where('detailtags.id_tag', '=', $tagName)
        ->join('articles', 'articles.id_article', '=', 'detailtags.id_article')
        ->get()
        ;
        foreach ($taggedArticle as $article) {
            $article->deskripsi = Str::limit($article->deskripsi, 150);
            $article->differenceDate = Carbon::now()->diffInDays(Carbon::parse($article->tgl_publish));
            // $article->authorName = User::select('name')->where('id_user', $article->id_user)->first()->name;
        }
        return view('Home/home')
        ->with('authors', $this->getAuthor())
        ->with('tags', $this->getTag())
        ->with('popularArticles', $taggedArticle)
        ->with('followedArticles', $this->getFollowedArticle());
    }

    public function getPopularArticle(){
        $articles = Article::inRandomORder()->paginate(10);
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
    public function getDifferenceDate($collections){
        foreach ($collections as $collection) {
            $collection->deskripsi = Str::limit($collection->deskripsi, 150);
            $collection->differenceDate = Carbon::now()->diffInDays(Carbon::parse($collection->tgl_publish));
        }
        return $collections;
    }

    public function getFollowedArticle(){
        $joinFollow = DB::table('users as u')
        ->where('u.id_user', '=', Auth::id())
        ->join('followers', 'u.id_user', '=', 'followers.id_user_m')
        ->select('u1.profile_picture','followers.id_user_f', 'articles.*', 'tags.id_tag' ,'tags.title_tag', DB::raw("GROUP_CONCAT(tags.title_tag SEPARATOR ', ') as title_group"), 'u1.username', 'u1.name as authorName')
        ->join('articles', 'followers.id_user_f', '=', 'articles.id_user')
        ->join('detailtags', 'detailtags.id_article', '=', 'articles.id_article')
        ->join('tags', 'tags.id_tag', '=', 'detailtags.id_tag')
        ->join('users as u1', 'followers.id_user_f', '=', 'u1.id_user')
        ->inRandomOrder()
        ->groupBy('articles.id_article')
        // ->tosql();
        ->paginate(10);
        ;
        $joinFollow = $this->getDifferenceDate($joinFollow);
        return $joinFollow;
    }

    public function getArticleByTopic($id){        
        $articles = DB::table('detailtags')
        ->where('detailtags.id_tag', '=', $id)
        ->join('articles', 'articles.id_article', '=', 'detailtags.id_article')
        ->join('users', 'users.id_user', '=', 'articles.id_user')
        ->select('users.name as authorName', 'users.profile_picture', 'users.username', "articles.*", "detailtags.*")
        ->inRandomOrder()
        ->paginate(10);
        ;
        $articles = $this->getDifferenceDate($articles);
        return $articles;
    }
    public function searchTopic(Request $request){
        $tag =  DB::table('tags')->where('title_tag', '=', $request->title)->first();
        if($tag != null){
            return redirect()->route('clickedTag', ['tagName' => $tag->id_tag]);;
        }else{
            return redirect()->back()->withErrors("Topic tidak ditemukan")->withInput();
        }
              
        return $articles;
    }

    public function searchArticle(Request $request){
        // dd($request->title);
        $article = DB::table('articles')
		->where('judul','like',"%".$request->title."%")
        ->join('users', 'users.id_user', '=', 'articles.id_user')
        ->select('users.name as authorName', 'users.username', 'users.profile_picture', "articles.*")
        ->inRandomOrder()
        ->paginate(10);
        $article = $this->getDifferenceDate($article);
        if($article != null){
            return view('discover/discoverArticle')
            ->with('authors', $this->getAuthor())
            ->with('tags', $this->getTag())
            ->with('popularArticles', $article)
            ->with('followedArticles', $this->getFollowedArticle());
        }else{
            return redirect()->back()->withErrors("Article tidak ditemukan")->withInput();
        }
        return $articles;
    }

    public function index()
    {
        return view('discoverArticle')
        ->with('authors', $this->getAuthor())
        ->with('tags', $this->getTag())
        ->with('popularArticles', $this->getPopularArticle())
        ->with('followedArticles', $this->getFollowedArticle());
    }
    public function rekomendasi()
    {
        return view('discover/discoverArticle')
        ->with('authors', $this->getAuthor())
        ->with('tags', $this->getTag())
        ->with('popularArticles', $this->getPopularArticle())
        ->with('followedArticles', $this->getFollowedArticle());
    }
    public function populer()
    {
        return view('discover/discoverArticle')
        ->with('authors', $this->getAuthor())
        ->with('tags', $this->getTag())
        ->with('popularArticles', $this->getPopularArticle())
        ->with('followedArticles', $this->getFollowedArticle());
    }
    public function diikuti()
    {
        return view('discover/discoverArticle')
        ->with('authors', $this->getAuthor())
        ->with('tags', $this->getTag())
        ->with('popularArticles', $this->getPopularArticle())
        ->with('followedArticles', $this->getFollowedArticle());
    }
    public function getByTopic($tagName)
    {
        // dd($tagName);
        return view('discover/discoverArticle')
        ->with('authors', $this->getAuthor())
        ->with('tags', $this->getTag())
        ->with('popularArticles', $this->getArticleByTopic($tagName))
        ->with('followedArticles', $this->getFollowedArticle());
    }
}
