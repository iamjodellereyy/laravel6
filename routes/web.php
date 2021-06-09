<?php

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


// Route::get('/posts/{post}',function($post){
//     $posts = [
//         'my-first-post' => 'Hey this is your first post!',
//         'my-second-post' => 'Hey this is your second post!'
//     ];

//     if(! array_key_exists($post,$posts)){
//         abort(404, "Sorry, that post was not found");
//     }

//     return view('post',[
//         'post' => $posts[$post]
//     ]);
// });


Route::get('/posts/{post}','PostController@show')->name('post.index');

Route::get('/contact',function(){
    return view('contact');
});

