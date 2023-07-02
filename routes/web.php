<?php

use App\Http\Middleware\User;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreateArticleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/article', [articleController::class, 'index']);
// Route::get('/home', [HomeController::class, 'showHome']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/article', [CreateArticleController::class, 'show'])->name('article');

Route::get('/create-article', [CreateArticleController::class, 'create'])->name('create');
Route::post('/upload-image', [CreateArticleController::class, 'uploadImage'])->name('upload');
Route::post('/create-article', [CreateArticleController::class, 'store'])->name('store'); 
Route::get('/read-article/{id}/{judul}', [CreateArticleController::class, 'readArticle'])->name('read');

Route::get('/like/{id}', [ArticleController::class, 'like'])->name('like_article');
Route::post('/comment/{id}', [ArticleController::class, 'comment'])->name('comment_article');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware([User::class])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home/tag/{tagName}', [HomeController::class, 'getClickedTag'])->name('clickedTag');
    Route::get('/user', function () {
        return view('test')->with('id', Auth::user());
    });
});