<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/create',function(){
    return view('create_blog');
});

// ajouter via le form
Route::post('/add_title', function () {
    // faire des insert

});

// ajouter via le form
Route::post('/add_cover', function () {

});

// ajouter via le form
Route::post('/add_content', function () {

});

// ajouter via le form
Route::post('/add_iamge', function () {

});




