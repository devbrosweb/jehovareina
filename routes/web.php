<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', 'PostController@index')->name('blog.index');
Route::get('/blog/articulos/{post}', 'PostController@show')->name('blog.show');
Route::get('/blog/categoria/{category}', 'PostController@category')->name('blog.category');
Route::get('/blog/autor/{author}', 'PostController@author')->name('blog.author');
