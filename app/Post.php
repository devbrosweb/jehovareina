<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use GrahamCampbell\Markdown\Facades\Markdown;

class Post extends Model
{

    protected $dates = ['published_at'];

    public function author(){
      return $this->belongsTo(User::class);
    }
    public function category(){
      return $this->belongsTo(Category::class);
    }

    public function getDateAttribute(){
      return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
    }

    public function getBodyHtmlAttribute(){
      return $this->body ? Markdown::convertToHtml(e($this->body)) : null;
    }
    public function getExcerptHtmlAttribute(){
      return $this->excerpt ? Markdown::convertToHtml(e($this->excerpt)) : null;
    }

    public function scopePublished($query){
      return $query->where('published_at', '<=', Carbon::now());
    }
    public function getImageUrlAttribute(){
      $imageUrl = "";

      if( ! is_null($this->image)){
           $imagePath = public_path() . "\\frontend\images\\blog\\" . $this->image;
          if(file_exists($imagePath)){
             $imageUrl = asset("/frontend/images/blog/" . $this->image);
           }
      }

      return $imageUrl;

    }
}
