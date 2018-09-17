<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Post;
use App\view\composer\NavigationComposer;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
          view()->composer('layouts.frontend.partials.sidebar', NavigationComposer::class);


        // view()->composer('frontend.partials.sidebar', function($view){
        //     //get all categories
        //     $categories = Category::with(['posts' => function($query){
        //         $query->published();
        //     }])->orderBy('title', 'asc')->get();
        //
        //     return $view->with('categories', $categories);
        //
        // });
        //
        // view()->composer('frontend.partials.sidebar', function($view){
        //     //get all categories
        //     $pupularPosts = Post::popular()->published()->take(3)->get();
        //     return $view->with('pupularPosts', $pupularPosts);
        //
        // });


    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
