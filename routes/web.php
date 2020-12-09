<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
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

Route::get('/login', [HomeController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::resource('users', 'UserController')->except([]);

// regex
Route::get('posts/{name}', [PostController::class, 'show'])->where('name', '[\sa-zA-Z\d-_]+')->name('posts');

// redirect to named route
Route::get('/redirect', function () {
    return redirect()->route('posts', ['name' => 'An article']);
});

// Route::post('/test',)
// redirect
Route::redirect('/here', '/there');
