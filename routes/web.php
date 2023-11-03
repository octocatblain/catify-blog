<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PageController; //import the PageController class
use App\Http\Controllers\PostsController; //import the PostsController class

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostsController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [PageController::class, 'products'])->name('products');


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::resource('posts', PostsController::class);


// Route::livewire('/login', [Login::class, 'login'])->name('login');
// Route::livewire('/register', [Register::class, 'register'])->name('register');
// Route::livewire('/logout', [Logout::class, 'logout'])->name('logout');


// -> Alternative way to create routes using dynamic parameter {post}

// Route::get('posts', [PostsController::class, 'index']);
// Route::get('posts/{post}', [PostsController::class, 'show']);
// Route::get('posts/create', [PostsController::class, 'create']);
// Route::put('posts/{post}', [PostsController::class, 'update']);
// Route::delete('posts/{post}', [PostsController::class, 'destroy']);
// Route::get('posts/{post}/edit', [PostsController::class, 'edit']);
// Route::post('posts', [PostsController::class, 'store']);


// Route::group(['middleware' => 'auth'], function () {
//     Route::get('posts/create', [PostsController::class, 'create']);
//     Route::put('posts/{post}', [PostsController::class, 'update']);
//     Route::delete('posts/{post}', [PostsController::class, 'destroy']);
//     Route::get('posts/{post}/edit', [PostsController::class, 'edit']);
//     Route::post('posts', [PostsController::class, 'store']);
// });