<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('blog.index');
});
