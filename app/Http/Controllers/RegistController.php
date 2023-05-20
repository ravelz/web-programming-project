<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Query\Builder;

class RegistController extends Controller
{
    public function index(){
        echo("ajigile");
        
        return view('regist');
    }
    
    public function regist(Request $request){
        $name = $request->name;
        $username = $request->username;
        $email = $request->email;
        $password = Hash::make($request->password);

        $string = User::select('id_user')->orderBy('id_user', 'desc')->first();
        if($string == null){
            $maxid = 0;
        }else{
            $maxid = (int)substr(($string), -4);
        }

        $id = "USR".str_pad($maxid+1, 4, "0", STR_PAD_LEFT);

        echo($id);
        $userinput = User::create
        ([
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'id_user' => $id,
            'role' => 'Reader',
            'jml_followers' => 0
        ]);

        if($userinput){
            return redirect()->route('mainpage')->with('success', 'Data berhasil dimasukkan');
        }
        else{
            return view('regist')->with('fail', 'Bermasalah nih bos');
        }
    }
}
