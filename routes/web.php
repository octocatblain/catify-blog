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

// Controller syntax for index page works too
// Route::get('/', [PageController::class, 'index'])->name('index');

// Route::get('/about', function () {
//     return view('pages.about');
// });

Route::get('/', [PostsController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/services', [PageController::class, 'services']);

Route::resource('posts', PostsController::class);



// -> Alternative way to create routes using dynamic parameter {post}

// Route::get('posts', [PostsController::class, 'index']);
// Route::get('posts/{post}', [PostsController::class, 'show']);
// Route::get('posts/create', [PostsController::class, 'create']);
// Route::put('posts/{post}', [PostsController::class, 'update']);
// Route::delete('posts/{post}', [PostsController::class, 'destroy']);
// Route::get('posts/{post}/edit', [PostsController::class, 'edit']);
// Route::post('posts', [PostsController::class, 'store']);
