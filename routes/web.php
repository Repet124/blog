<?php

use App\Models\Post;
use App\Models\Catigory;
use App\Models\User;

use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/catigories/{catigory:slug}', function(Catigory $catigory) {

	return view('posts', [
		'posts' => $catigory -> posts,
		'currentCatigory' => $catigory,
		'catigories' => Catigory::all()
	]);
});

Route::get('/author/{author:username}', function(User $author) {

	return view('posts', [
		'posts' => $author -> posts,
		'catigories' => Catigory::all()
	]);
});