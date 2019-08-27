<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save(Request $request)
    {   
        $image = $request->file('subirFoto');
        $description = $request->input('description');
        
        $user = \Auth::user();
        $post = new Post();
        $post->user_id = $user->id;
        $post->description = $description;

        if($image){
            $filename = $image->getClientOriginalName();
            Storage::disk('posts')->put($user->id.'/'.$filename, File::get($image));
            $post->image_path = $filename;
        }

        $post->save();

        return redirect('/perfil');
        

    }
    
}


