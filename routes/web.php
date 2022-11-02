<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Contracts\Session\Session;

Route::get('/',function(){
   return view('Home');
});

Route :: get('/register',[RegisterController ::class,'create'])
   ->middleware('guest')
   ->name('register.index');
   
   Route :: post('/register',[RegisterController ::class,'store'])
   ->name('register.store');
   Route :: post('/login',[SessionsController ::class,'store'])
   ->name('login.store');

Route :: get('/login',[SessionsController ::class,'create'])
   ->name('login.index');

Route :: get('/logout',[SessionsController ::class,'destroy'])
   ->name('login.destroy');
