<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return redirect()->route('mainpage');
        }
        return view('login');
    }

    public function login(Request $request){
        $login_important = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if(Auth::attempt($login_important)){
            return redirect()->route("mainpage");
        }
        else{
            return view('login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route("login");
    }
}
