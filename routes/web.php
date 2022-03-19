<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
    return view('home', ['posts' => Post::get()->take(5)]);
});

Route::get('rss', function () {
    return view('rss');
});

Route::get('topics', function() {
    return view('topics', ['posts' => Post::get()->take(5)]);
});

Route::get('topics/{topic}', function($topic) {
    return view('topics', ['posts' => Post::where('topic', $topic)->get()]);
});

Route::get('posts/{post:slug}', function(Post $post) {
    return view('layouts.post', ['post' => $post]);
});