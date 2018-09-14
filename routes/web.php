<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', 'PostController@index')->name('blog.index');
Route::get('/blog/{post}', 'PostController@show')->name('blog.show');
