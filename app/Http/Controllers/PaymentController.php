<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\User;

class PaymentController extends Controller
{
    public function subsType(){
        $role = Auth::user()->role;
        // dd($role);
        return view('subsType')
        ->with('role', $role);
    }
    public function index($role, $paket){
        return view("payment")
        ->with("role", $role)
        ->with("paket", $paket);
    }
    public function paySuccess(Request $request, $role, $paket){
        // dd($request->all());
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'kota' => 'required',
            'negara' => 'required',
            "namaKartu" => 'required',
            "noKartu" => 'required'
        ];
        $message = [
            'required' => 'Tolong isi seluruh field',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $role = User::find(Auth::user()->id_user)
            ->update(['role' => (int)$role]);
        return view("paySuccess")
        ->with('data', $request->all())
        ->with('paket', $paket);
    }
}
