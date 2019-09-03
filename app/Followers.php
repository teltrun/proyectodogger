<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Followers extends Model
{
    protected $table = 'followers';

    //relacion de muchos a muchos con la tabla follower
    public function user(){
        return $this->belongsToMany('App\user', 'user_id');
    }
    //relacion de uno a muchos con la tabla post
    public function post(){
        return $this->belongsTo('App\User', 'post_id');
    }
}
