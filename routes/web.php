<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function (){
    return view('front.home');
});
Route::get('/about', function (){
    return view('front.about');
});
Route::get('/ekstra', function (){
    return view('front.ekstra');
});
Route::get('/galeri', function (){
    return view('front.galeri');
});
Route::get('/tabel', function (){
    return view('front.tabel');
});