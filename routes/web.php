<?php

use App\Example;
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

Route::get('/', function () {
    // return view('welcome');
    
    $example = resolve('example');
    $example->go();
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $name = request('name');
    error_log($name);
    return view('test', [
        'name' => $name
    ]);
});

// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//         1 => "This is the first post",
//         2 => "This is the second post"
//     ];

//     if (!array_key_exists($post, $posts)) {
//         abort(404, 'Sorry, post does not exist!');
//     }

//     return view('post', [
//         'post' => $posts[$post]
//     ]);
// });

Route::get('/posts/{post}', 'PostsController@show');


Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');
Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('articles.edit');
Route::put('/articles/{article}', 'ArticlesController@update');