<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

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

Route::get('/', Homecontroller::class);

Route::get('user/create', function () {
   return "crear un evento";
});

Route::get('user/{usuario?}', function ($usuario = null) {
  
   return "Eres un usuario de tipo: $usuario";
 });




