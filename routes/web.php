<?php


use App\Http\Controllers\articleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreateArticleController;

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
    return view('article');
});


Route::get('/article', [articleController::class, 'index']);
Route::get('/home', [HomeController::class, 'showHome']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/article', [CreateArticleController::class, 'show'])->name('article');
Route::get('/create-article', [CreateArticleController::class, 'create'])->name('create');
Route::post('/create-article', [CreateArticleController::class, 'store'])->name('store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homes', function () {
    return view('Layout/home');
});

Route::get('/test', function () {
    return view('test');
});
