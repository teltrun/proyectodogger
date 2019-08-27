<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    //Relacion de uno a muchos con tabla Comments
    public function comments(){
        return $this->hasMany('App\Comment');
    }

    //Relacion de uno a muchos con tabla Likes
    public function likes(){
        return $this->hasMany('App\Like');
    }

    //Relacion de muchos a uno con tabla Users
    public function users(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
