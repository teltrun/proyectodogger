<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';

    //Relacion de muchos a uno con tabla Users
    public function users(){
        return $this->belongsTo('App\User', 'user_id');
    }

    //Relacion de muchos a uno con tabla Post
    public function post(){
        return $this->belongsTo('App\User', 'post_id');
    }
}
