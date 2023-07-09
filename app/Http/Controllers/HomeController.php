<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Article;
use App\Models\Tag;
use App\Models\Follower;
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
        
        $following = DB::table('users')
        ->join('followers', 'users.id_user', '=', 'followers.id_user_m')
        ->where('users.id_user', '=', Auth::id())
        ->get();
        // dd($following);
        $authors = User::where('role', '2')->whereNotIn('id_user', function($q){
            $q->select(DB::raw('followers.id_user_f from users'))
            ->join('followers', 'users.id_user', '=', 'followers.id_user_m')
            ->where('users.id_user', '=', Auth::id());
        })
        ->where('id_user', '!=', Auth::id())
        // ->toSql();
        ->inRandomOrder()->paginate(5);
        // dd($authors);
        $aut = DB::table('bookmarks');
        return $authors;
    }

    public function getTag(){
        $tags = Tag::inRandomOrder()->limit(10)->get();
        // dd($tags[0]->toArray());
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
            $article->authorName = User::select('name')->where('id_user', $article->id_user)->first()->name;
        }
        return view('Home/home')
        ->with('authors', $this->getAuthor())
        ->with('tags', $this->getTag())
        ->with('popularArticles', $taggedArticle)
        ->with('followedArticles', $this->getFollowedArticle());
    }

    public function getPopularArticle(){
        $articles = Article::inRandomORder()->limit(10)->get();
        $articles = $this->getDifferenceDate($articles);
        foreach ($articles as $article) {
            $user = User::select('name', 'username')->where('id_user', $article->id_user)->first();
            // dd($user);
            $article->authorName = $user->name;
            $article->username = $user->username;
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
        ->select('followers.id_user_f', 'articles.*', 'detailtags.*', 'tags.*', DB::raw("GROUP_CONCAT(tags.title_tag SEPARATOR ', ') as title_group"), 'u1.username', 'u1.name as authorName')
        ->join('articles', 'followers.id_user_f', '=', 'articles.id_user')
        ->join('detailtags', 'detailtags.id_article', '=', 'articles.id_article')
        ->join('tags', 'tags.id_tag', '=', 'detailtags.id_tag')
        ->join('users as u1', 'followers.id_user_f', '=', 'u1.id_user')
        ->inRandomOrder()
        ->groupBy('articles.id_article')
        // ->toSql();
        ->get();
        ;
        // dd($joinFollow);
        $joinFollow = $this->getDifferenceDate($joinFollow);
        
        return $joinFollow;
    }

    public function follow($id){
        // dd($id);
        $follow = Follower::create([
            'id_user_f' => $id,
            'id_user_m' => Auth::id()
        ]);
        return back()->withErrors(['msg' => 'The Message']);;
    }
    
    public function index()
    {

        // dd(Auth::user());
        return view('Home/home')
        ->with('authors', $this->getAuthor())
        ->with('tags', $this->getTag())
        ->with('popularArticles', $this->getPopularArticle())
        ->with('followedArticles', $this->getFollowedArticle());
    }

}
