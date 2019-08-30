<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Post;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function perfil()
    {
        $posts = Post::where('user_id', \Auth::user()->id)->get();
                    
        return view('pages/perfil')->with(['posts' => $posts]);
    }

    public function timeline()
    {
        $imagenes = Post::orderBy('id', 'desc')->get();
                    
        return view('pages/timeline', ['imagenes' => $imagenes]);
        
    }
    
    public function config(){

        return view('pages/modificarPerfil');
    }



    public function update(Request $request){
        $user = \Auth::user();
        $id = \Auth::user()->id;

        $validate = $this->validate($request, [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'nick' => 'required|string|max:50|unique:users,nick,'.$id,
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'description' => 'max:255',
            'genre' => 'max:50',
            'phone' => 'integer',

        ]);

        $name = $request->input('name');
        $surname = $request->input('surname');
        $nick = $request->input('nick');
        $email = $request->input('email');
        $description = $request->input('description');
        $genre = $request->input('genre');
        $phone = $request->input('phone');


        $user->name = $name;
        $user->surname = $surname;
        $user->nick = $nick;
        $user->email = $email;
        $user->description = $description;
        $user->genre = $genre;
        $user->phone = $phone;


        //Subir foto de perfil
        $image = $request->file('image');
        if ($image){
            $image_path = 'perfil_'. $image->getClientOriginalName();
            Storage::disk('users')->put($nick.'/'.$image_path, File::get($image));
            $user->image = $image_path;
        }
        

        $user->update();

        return redirect('/config')
                         ->with(['message' => 'Usuario actualizado correctamente']);
    }

    public function getImage($user, $filename){
        $file = Storage::disk('users')->get($user.'/'.$filename);
        return new Response($file, 200);
    }
}
