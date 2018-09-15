<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', 'PostController@index')->name('blog.index');
Route::get('/blog/post/{post}', 'PostController@show')->name('blog.show');
Route::get('/blog/categoria/{category}', 'PostController@category')->name('blog.category');
