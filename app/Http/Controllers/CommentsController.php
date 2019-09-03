<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Foundation\Auth\User;
use SebastianBergmann\Environment\Console;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save(Request $request)
    {   
        $content = $request->input('content');
        $user_id = \Auth::user()->id;
        $post_id = $request->input('post');

        $comment = new Comment();
        $comment->user_id = $user_id;
        $comment->content = $content;
        $comment->post_id = $post_id;

        $comment->save();

        return redirect('/comentarios/'.$post_id);
        

    }
    
    public function getComments($idPost){
        $comments = Comment::where('post_id', $idPost)->get();
        $post = Post::where('id', $idPost)->get();
        $posteador = User::where('id', $post[0]->user_id)->get();
                    
        return view('pages/comentarios')->with(['comments' => $comments, 'post' => $post, 'posteador' => $posteador]);
    }   

}
