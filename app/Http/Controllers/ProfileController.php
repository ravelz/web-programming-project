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

class ProfileController extends Controller
{
    public function index($username)
    {
        return view('profile')
        ->with('username', $username)
        ->with('profile', $this->getProfile($username))
        ->with('follower', $this->getFollower($username))
        ->with('following', $this->getFollowing($username))
        ;
    }

    public function getDifferenceDate($collections){
        foreach ($collections as $collection) {
            $collection->deskripsi = Str::limit($collection->deskripsi, 150);
            $collection->differenceDate = Carbon::now()->diffInDays(Carbon::parse($collection->tgl_publish));
        }
        return $collections;
    }
    public function getProfile($username){
        $profile = DB::table('users')
        ->where('users.username', '=', $username)
        ->select('username', 'name','users.name as authorName', 'role','status_member', 'articles.*','detailtags.*', 'tags.*', DB::raw("GROUP_CONCAT(tags.title_tag SEPARATOR ', ') as title_group"))
        ->leftjoin('articles', 'users.id_user', '=', 'articles.id_user')
        ->leftjoin('detailtags', 'detailtags.id_article', '=', 'articles.id_article')
        ->leftjoin('tags', 'tags.id_tag', '=', 'detailtags.id_tag')
        ->groupBy('articles.id_article')
        // ->toSql();
        ->get();
        $profile = $this->getDifferenceDate($profile);
        // dd($profile);
        return $profile;
    }
    public function getFollower($username){
        $follower = DB::table('users')
        ->join('followers', 'users.id_user', '=', 'followers.id_user_f')
        ->where('users.username', '=', $username)
        ->get();
        // dd($follower);
        return count($follower);
    }
    public function getFollowing($username){
        $following = DB::table('users')
        ->join('followers', 'users.id_user', '=', 'followers.id_user_m')
        ->where('users.username', '=', $username)
        ->get();
        return count($following);
    }
}
