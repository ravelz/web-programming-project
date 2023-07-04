<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscoverArticleController;
use App\Http\Controllers\TopicsController;use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('login');
});

Route::get('/home', function () {
    return view('Layout/home');
});

Route::get('/test', function () {
    return view('test');
});

