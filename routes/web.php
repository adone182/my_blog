<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home', [
        "title" => "Homepage",
        "active" => "homepage",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Romadoni",
        "email" => "romadoniofficial@gmail.com",
        "job" => "Web Developer & Frontend Developer",
        "img" => "me.png"
    ]);
});

//route halaman all post 
Route::get('/posts', [PostController::class, 'index']);

//route halaman single page Post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// route halaman categories
Route::get('/categories/', function () {
    return view('categories', [
        "title" => "Post Categories",
        "active" => "categories",
        "categories" => Category::all()
    ]);
});

// route halaman per category
// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         "title" => "Post Category : $category->name",
//         "active" => "categories",
//         "posts" => $category->posts->load('author', 'category'),
//     ]);
// });

// route halaman user / author
// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post Author : $author->name",
//         "active" => "posts",
//         'posts' => $author->posts->load('author', 'category'),
//     ]);
// });

// route for login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
// route for register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// route for dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

// route for dashboardPost
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
// route for slug
Route::get('/dashboard/post/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

// router for administrator category dashboard

Route::resource('/dashboard/categories', AdminDashboardController::class)->middleware('admin');

// route for slug
// Route::get('/dashboard/categories/checkSlug', [AdminDashboardController::class, 'checkSlug'])->middleware('auth');
