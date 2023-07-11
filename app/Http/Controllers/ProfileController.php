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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;
use URL;

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
        ->with('draft', $this->getDraft($username))
        ;
    }
    public function getDraft($username){
        $dataDraft = DB::table('drafts')
        ->where('drafts.id_user', '=', Auth::User()->id_user)
        ->get();

        $dataDraft = $this->getDifferenceDate1($dataDraft);
        // dd($dataDraft);
        return $dataDraft;
    }

    public function getDifferenceDate1($collections){
        foreach ($collections as $collection) {
            $collection->deskripsi = Str::limit($collection->deskripsi, 150);
            $collection->differenceDate = Carbon::now()->diffInDays(Carbon::parse($collection->created_at));
        }
        return $collections;
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
            ->select('username', 'profile_picture', 'name','users.name as authorName', 'users.aboutme', 'users.profile_picture', 'role','membership', 'articles.*','detailtags.*', 'tags.*', DB::raw("GROUP_CONCAT(tags.title_tag SEPARATOR ', ') as title_group"))
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
            $profile = DB::table('users as u')
            ->where('u.username', '=', $username)
            ->select('u1.username', 'u1.profile_picture', 'u.name','u1.name as authorName', 'u.role','membership', 'articles.*','detailtags.*', 'tags.*', DB::raw("GROUP_CONCAT(tags.title_tag SEPARATOR ', ') as title_group"))
            // left join `bookmarks` on u.id_user = bookmarks.id_user
            ->leftjoin('bookmarks', 'u.id_user', '=', 'bookmarks.id_user')
            ->leftjoin('articles', 'bookmarks.id_article', '=', 'articles.id_article')
            ->leftjoin('detailtags', 'detailtags.id_article', '=', 'articles.id_article')
            ->leftjoin('tags', 'tags.id_tag', '=', 'detailtags.id_tag')
            ->leftjoin('users as u1', 'articles.id_user', '=', 'u1.id_user')
            ->groupBy('articles.id_article')
            // ->toSql();
            // ->paginate(10);
            ->get();
            // dd($profile);
            $profile = $this->getDifferenceDate($profile);
        }catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            return back()->withErrors(['msg' => 'Profile tidak ditemukan']);
        }

        return $profile;

    }

    public function follow($id){
        $user = User::find($id);
        $user->followers()->attach(Auth::id());
        return back()->withErrors(['msg' => 'The Message']);
    }

    public function unFollow($id){
        $user = User::find($id);
        $user->followers()->detach(Auth::id());
        return back()->withErrors(['msg' => 'The Message']);

    }

    public function changePassword(Request $request)
    {
        $image = $request->file('fileInput');
        // dd($request->all());
        if($image != null){
            $rules = [
                'name' => 'required',
                'username' => 'required',
                'current_password' => ['required', new MatchOldPassword],
                'fileInput' => 'required|image|mimes:jpg,jpeg,png',
            ];
        }else{
            $rules = [
                'name' => 'required',
                'username' => 'required',
                'current_password' => ['required', new MatchOldPassword]
            ];
        }
        $message = [
            'required' => ':attribute wajib diisi',
            'mimes' => 'Format :attribute harus JPG,JPEG, atau PNG '
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $imageName = Auth::user()->profile_picture;
        if($image != null){
            $imageName = $request->username.'.'.$image->getClientOriginalExtension();
            $moveImg = Storage::disk('public')->putFileAs('', $image, $imageName);
        }
        // dd($imageName);
        
        if($request->new_password != null){
            $isValid = $request->validate([
                'current_password' => ['required', new MatchOldPassword],
                'new_password' => ['required'],
                'new_confirm_password' => ['same:new_password'],
            ]);
            if(!$isValid){
                return redirect()->back()->withErrors($isValid)->withInput();
            }
            User::find(Auth::user()->id_user)
            ->update(
                ['name' => $request->name,
                'username' => $request->username,
                'aboutme' => $request->aboutme,
                'profile_picture' => $imageName,
                'password'=> Hash::make($request->new_password)]);
        }else{
            $isValid = $request->validate([
                'current_password' => ['required', new MatchOldPassword],
            ]);
            if(!$isValid){
                return redirect()->back()->withErrors($isValid)->withInput();
            }
            User::find(Auth::user()->id_user)
            ->update(
                ['name' => $request->name,
                'username' => $request->username,
                'aboutme' => $request->aboutme,
                'profile_picture' => $imageName,
                'password'=> Hash::make($request->new_password)]);
        }
        return redirect()->back()->withErrors("Profile berhasil diubah!")->withInput();
    }
}
