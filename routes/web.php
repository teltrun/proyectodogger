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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/comentarios/{id}', 'CommentsController@getComments');
Route::get('/timeline', 'UserController@timeline')->name('timeline');
Route::get('/perfil', 'UserController@Perfil');
Route::get('/config', 'UserController@config')->middleware('auth');
Route::post('/config', 'UserController@update')->name('user.update');
Route::post('/savePost', 'PostController@save')->name('post.save');
Route::post('/saveComment', 'CommentsController@save')->name('comment.save');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/foto/{user}/{filename}', 'UserController@getImage')->name('user.foto');
Route::get('/user/posts/{user}/{filename}', 'PostController@getPosts')->name('user.posts');
Route::get('/followers', 'FollowersController@followers')->name('followers');
