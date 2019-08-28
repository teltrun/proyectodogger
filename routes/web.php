<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Use App\Post;

Route::get('/', function () {

    // $posts = Post::all();
    // foreach ($posts as $post) {
    //     echo $post->description;
    //     echo '<br>';
    //     echo $post->image_path;
    //     echo '<br>';
    //     echo $post->users->name;
    //     echo '<br>';
    //     echo '<strong>Comentarios</strong><br>';
    //     foreach ($post->comments as $comment) {
    //         echo $comment->content . '  Usuario:' . $comment->users->name;
    //         echo '<br>';
    //     }

    //     echo "Likes: ".count($post->likes);

    //     echo '<hr>';


    // }
    // die;

    return view('pages/index');
});

Route::get('/timeline', 'UserController@timeline')->name('timeline');

Route::get('/perfil', 'UserController@Perfil');

Route::get('/config', 'UserController@config')->middleware('auth');
Route::post('/config', 'UserController@update')->name('user.update');
Route::post('/savePost', 'PostController@save')->name('post.save');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/foto/{user}/{filename}', 'UserController@getImage')->name('user.foto');
Route::get('/user/posts/{user}/{filename}', 'PostController@getPosts')->name('user.posts');




Route::get('/faq', function () {
    return view('pages/faq');
});

