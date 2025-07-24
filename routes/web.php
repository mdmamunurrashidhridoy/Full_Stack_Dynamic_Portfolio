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

Route::get('/login',function(){
    return view('auth.login');
});

Route::get('/register',function(){
    return view('auth.register');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',function(){
        return view('admin.dashboard');
    });
});

use App\Http\Controllers\AuthController;

Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/register',[AuthController::class,'register'])->name('register');