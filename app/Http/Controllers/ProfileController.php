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
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index($username)
    {
        return view('profile')
        ->with('username', $username)
        ->with('profile', $this->getProfile($username))
        ->with('follower', $this->getFollower($username))
        ->with('following', $this->getFollowing($username))
        ->with('bookmark', $this->getBookmark($username))
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
        try{
            $profile = DB::table('users')
            ->where('users.username', '=', $username)
            ->select('username', 'name','users.name as authorName', 'users.aboutme', 'users.profile_picture', 'role','membership', 'articles.*','detailtags.*', 'tags.*', DB::raw("GROUP_CONCAT(tags.title_tag SEPARATOR ', ') as title_group"))
            ->leftjoin('articles', 'users.id_user', '=', 'articles.id_user')
            ->leftjoin('detailtags', 'detailtags.id_article', '=', 'articles.id_article')
            ->leftjoin('tags', 'tags.id_tag', '=', 'detailtags.id_tag')
            ->groupBy('articles.id_article')
            // ->toSql();
            ->get();
            $profile = $this->getDifferenceDate($profile);
            // dd($profile);
        }catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            return back()->withErrors(['msg' => 'Profile tidak ditemukan']);
        }
        
        return $profile;
    }
    public function getFollower($username){
        // $follower = DB::table('users as u1')
        // ->join('followers', 'u1.id_user', '=', 'followers.id_user_f')
        // ->join('users as u2', 'u2.id_user', '=', 'followers.id_user_m')
        // ->where('u1.username', '=', $username)
        // ->select('u2.*')
        // ->get();
        // dd($follower);
        try{
            $x = User::where('username', $username);
            // dd($x->first()->id_user);
            $a = User::find($x->first()->id_user);
            // $a = User::find(Auth::id());
            // dd($a->id_user);
            $a_followers = $a->followers()->get();
        }catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            return back()->withErrors(['msg' => 'Profile tidak ditemukan']);
        }
        
        
        // $isFollowing = User::find(Auth::id())->isFollowing($a->id_user);
        // dd($isFollowing);
        return $a_followers;
    }
    public function getFollowing($username){
        // $following = DB::table('users as u1')
        
        // ->join('followers', 'u1.id_user', '=', 'followers.id_user_m')
        // ->join('users as u2', 'u2.id_user', '=', 'followers.id_user_f')
        // ->where('u1.username', '=', $username)
        // ->select('u2.*')
        // // ->toSql();
        // ->get();
        try{
            $x = User::where('username', $username);
            // dd($x->first()->id_user);
            $a = User::find($x->first()->id_user);
            $a_followers = $a->following()->get();

        }catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            return back()->withErrors(['msg' => 'Profile tidak ditemukan']);
        }
        

        return $a_followers;
    }
    public function getBookmark($username){
        try{
            $profile = DB::table('users')
            ->where('users.username', '=', $username)
            ->select('username', 'name','users.name as authorName', 'role','membership', 'articles.*','detailtags.*', 'tags.*', DB::raw("GROUP_CONCAT(tags.title_tag SEPARATOR ', ') as title_group"))
            // left join `bookmarks` on users.id_user = bookmarks.id_user
            ->leftjoin('bookmarks', 'users.id_user', '=', 'bookmarks.id_user')
            ->leftjoin('articles', 'bookmarks.id_article', '=', 'articles.id_article')
            ->leftjoin('detailtags', 'detailtags.id_article', '=', 'articles.id_article')
            ->leftjoin('tags', 'tags.id_tag', '=', 'detailtags.id_tag')
            ->groupBy('articles.id_article')
            // ->toSql();
            ->get();
            // dd($profile);
            $profile = $this->getDifferenceDate($profile);
        }catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            return back()->withErrors(['msg' => 'Profile tidak ditemukan']);
        }

        return $profile;

    }

    public function changePassword(Request $request)
    {
        $image = $request->file('fileInput');
        dd(Auth::user(), $request->files->all(), $request->fileInput, $request->current_password, $request->new_password, $request->new_confirm_password);
        
        $imageName = $request->username.'.'.$image->getClientOriginalExtension();
        $moveImg = Storage::disk('public')->putFileAs('uploads/', $image, $imageName);
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
   
        User::find(Auth::user()->id_user)->update(['password'=> Hash::make($request->new_password)]);
   
        dd('Password change successfully.');
    }
}
