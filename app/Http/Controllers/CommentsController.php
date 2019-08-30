<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save(Request $request)
    {   
        $comment = $request->input('comment');


        $comment->save();

        return redirect('/perfil')->with(['message' => 'Comentario agregado correctamente']);
        

    }
    
    public function getComments($user, $filename){
        

    }   
}
