<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {

    $posts=Post::all();

    return view('welcome',[
        'article'=>$posts, // tableau assiociatif clé valeur
    ]);
});


Route::get('/index/{id}', function ($id) {

   $posts=Post::find($id);



    return view('index',[
        'article'=>$posts, // tableau assiociatif clé valeur
    ]);
});


// afficher la route edit avant de patch

Route::get('/index/{id}/edit', function ($id) {

    $posts=Post::find($id);



    return view('edit_blog',[
        'article'=>$posts, // tableau assiociatif clé valeur
    ]);
});


Route::patch('/index/{id}/edit', function ($id) {

    $article=Post::find($id);
    $article->update([
        'title' => request('titre'),
    ]);



    return redirect('/');
});




Route::get('/create',function(){
    return view('create_blog');
});

Route::post('/create',function (){

    $post=new Post();
    $post->title=request('title');
    $post->content=request('content');
    $post->cover=request('cover');
    $post->image=request('image');
    $post->save();

    return redirect('/');


});




