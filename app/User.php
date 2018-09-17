<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use GrahamCampbell\Markdown\Facades\Markdown;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){

      return $this->hasMany(Post::class, 'author_id');

    }

    public function getRouteKeyName(){

      return 'slug';

    }

    public function getBioHtmlAttribute(){

      return $this->bio ? Markdown::convertToHtml(e($this->bio)) : null;

    }

    public function gravatar(){

        $email = $this->email;
        $default = "https://www.somewhere.com/homestar.jpg";
        $size = 40;

        return $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

    }
}
