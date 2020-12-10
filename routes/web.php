<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

// login and logout
Route::get('login', [LoginController::class, 'showLogin'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// register
Route::get('register', [UserController::class, 'create'])->name('register');
Route::post('register', [UserController::class, 'store']);

// users controller
Route::resource('users', 'UserController')->except(['create', 'store']);

// regex
Route::get('posts/{name}', [PostController::class, 'show'])->where('name', '[\sa-zA-Z\d-_]+')->name('posts');

// redirect to named route
Route::get('/redirect', function () {
    return redirect()->route('posts', ['name' => 'An article']);
});

// Route::post('/test',)
// redirect
Route::redirect('/here', '/there');
