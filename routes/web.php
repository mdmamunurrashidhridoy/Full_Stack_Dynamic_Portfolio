<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/education', function(){
    return view('education');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/projects', function(){
    return view('projects');
});

Route::get('/specialization', function(){
    return view('specialization');
});

Route::get('/mystory',function(){
    return view('myStory');
});