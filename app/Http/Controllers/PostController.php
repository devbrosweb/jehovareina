<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Post;
use App\Category;
use App\User;

class PostController extends Controller
{
    protected $limit = 3;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      //get all posts
      $posts = Post::with('author')
                      ->latest()
                      ->published()
                      ->Paginate($this->limit);
        return View('blog.index', compact('posts'));

    }

    public function category(Category $category)
    {
      $categoryName = $category->title;

      $posts = $category->posts()
                        ->with('author')
                        ->latest()
                        ->published()
                        ->paginate($this->limit);
         return View('blog.index', compact('posts', 'categoryName'));
    }

    public function author(User $author){

      $authorName = $author->name;

      $posts = $author->posts()
                        ->with('category')
                        ->latest()
                        ->published()
                        ->paginate($this->limit);
         return View('blog.index', compact('posts', 'authorName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->increment('view_count');
        return view('blog.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
