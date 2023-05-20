<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\RegistController;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login_action');
Route::get('/regist', [RegistController::class, 'index'])->name('regist');
Route::post('/regist', [RegistController::class, 'regist'])->name('regist_action');
Route::get('/mainpage', [MainPageController::class, 'index'])->name('mainpage');

