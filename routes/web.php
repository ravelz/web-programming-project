<?php

use App\Http\Middleware\User;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreateArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscoverArticleController;
use App\Http\Controllers\TopicsController;
use App\Http\Controllers\ProfileCOntroller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\timController;


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

Route::get('/aboutUs', function() {
    return view('aboutUs');
})->name('aboutUs');

Route::get('/article', [articleController::class, 'index']);
// Route::get('/home', [HomeController::class, 'showHome']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/tim', [timController::class, 'showTim'])->name('tim');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/article', [CreateArticleController::class, 'show'])->name('article');

Route::get('/create-article', [CreateArticleController::class, 'create'])->name('create');
Route::post('/upload-image', [CreateArticleController::class, 'uploadImage'])->name('upload');
Route::post('/store-article', [CreateArticleController::class, 'store'])->name('store'); 

Route::post('/draft-article', [CreateArticleController::class, 'draft'])->name('draft');
Route::get('/draft', [CreateArticleController::class, 'listDraft'])->name('listdraft');
Route::get('/edit-article/{id}/{judul}', [ArticleController::class, 'edit'])->name('edit');
Route::post('update-draft/{id}', [ArticleController::class, 'updateDraft'])->name('updatedraft');

Route::get('/read-article/{id}/{judul}', [CreateArticleController::class, 'readArticle'])->name('read');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/topics', [TopicsController::class, 'index'])->name('topics');
Route::get('/like/{id}', [ArticleController::class, 'like'])->name('like_article');
Route::post('/comment/{id}', [ArticleController::class, 'comment'])->name('comment_article');

Route::middleware([User::class])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/cari/tag/{tagName}', [DiscoverArticleController::class, 'getByTopic'])->name('clickedTag');
    Route::post('/cari/tag/', [DiscoverArticleController::class, 'searchTopic'])->name('searchTopic');

    Route::post('/cari/article/', [DiscoverArticleController::class, 'searchArticle'])->name('searchArticle');

    Route::get('/rekomendasi', [DiscoverArticleController::class, 'rekomendasi'])->name('rekomendasi');
    Route::get('/populer', [DiscoverArticleController::class, 'populer'])->name('populer');
    Route::get('/diikuti', [DiscoverArticleController::class, 'diikuti'])->name('diikuti');

    Route::get('/follow/{id}', [HomeController::class, 'follow'])->name('follow');
    Route::get('/unfollow/{id}', [HomeController::class, 'unfollow'])->name('unfollow');
    Route::get('/bookmark/{id}', [CreateArticleController::class, 'bookmark'])->name('bookmark');
    
    Route::get('/user', function () {
        return view('test')->with('id', Auth::user());
    });
    
    Route::get('/profile/{username}', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'changePassword'])->name('changePassword');


    Route::get('/payment/{role}/{paket}', [PaymentController::class, 'index'])->name('payment');
    
    Route::post('/paySuccess/{role}/{paket}', [PaymentController::class, 'paySuccess'])->name('paySuccess');
    
    Route::get('/visitProfile', function () {
        return view('visitProfile');
    });

    Route::get('/subsType', [PaymentController::class, 'subsType'])->name("subsType");
});
