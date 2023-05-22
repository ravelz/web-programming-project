<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }
    public function showRegistrationForm()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|min:8|max:255|confirmed',
        ]);
        $lastIdUser = User::select('id_user')->orderBy('id_user','desc')->first();
        if(!$lastIdUser){
            $idUser = "USR001";
        }else{
            $idUser = (int)substr($lastIdUser , -3);
            $idUser = 'USR'.$lastIdUser+1;
        }
        $user = User::create([
            'id_user' => $idUser,
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);
        
        auth()->login($user);
        return redirect('/home');
    }
}