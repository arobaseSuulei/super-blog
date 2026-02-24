<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {

    $posts=Post::all();

    return view('welcome',[
        'article'=>$posts,
    ]);
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




