<?php

use Illuminate\Support\Facades\Route;
use App\Post;

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
    // $posts = \DB::table('posts')->get();
    $posts = Post::all();
    return view('posts', compact('posts'));
});

Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts', compact('posts'));
});

Route::get('/posts/{id}', function ($id) {
    $post = Post::findOrFail($id);
    if (!$post) {
        return view('posts');
    }
    $title = $post->title;
    $body = $post->body;
    return view('post', compact('title', 'body'));
})->name('singlePost');
