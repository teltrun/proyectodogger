<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Image;
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
            $filename = '23'.$image->getClientOriginalName();
            Image::make($image)->resize(235, 235)->save(storage_path('app/posts/'.$user->nick.'/'.$filename));
            $post->image_path = $filename;
        }

        $post->save();

        return redirect('/perfil')->with(['message' => 'Tu post se ha subido correctamente']);
        

    }
    
    public function getPosts($user, $filename){
        $file = Storage::disk('posts')->get($user.'/'.$filename);
        return new Response($file, 200);
    }   

}
