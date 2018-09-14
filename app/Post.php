<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{

    public function author(){
      return $this->belongsTo(User::class);
    }

    public function getDateAttribute(){
      return $this->created_at->diffForHumans();
    }
}
