<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class timController extends Controller
{
    public function showTim(){
        return view('tim');
    }
}
