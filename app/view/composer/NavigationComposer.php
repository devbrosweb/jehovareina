<?php

namespace App\view\composer;

use Illuminate\View\view;
use App\Category;
use App\Post;

class NavigationComposer {

  public function compose(View $view){

      $this->composeCategories($view);
      $this->composePoularPosts($view);

  }

  private function composeCategories(View $view){

       $categories = Category::with(['posts' => function($query){
           $query->published();
       }])->orderBy('title', 'asc')->get();

       $view->with('categories', $categories);
  }

  private function composePoularPosts(View $view){

        //get all categories
        $pupularPosts = Post::popular()->published()->take(3)->get();
        $view->with('pupularPosts', $pupularPosts);

  }

}
