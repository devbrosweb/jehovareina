<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{

    protected $dates = ['published_at'];

    public function author(){
      return $this->belongsTo(User::class);
    }

    public function getDateAttribute(){
      return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
    }

    public function scopePublished($query){
      return $query->where('published_at', '<=', Carbon::now());
    }
}
