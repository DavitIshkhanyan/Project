<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/welcome',function(){
//     return view('welcome');
// });

Route::get('/welcome','WelcomeController@index');
Route::get('/blog','BlogController@index');
Route::get('/single-post','Single_postController@index');
Route::get('/about','AboutController@index');

Route::post('/message',function(){
    // print_r($_POST);
    return view('welcome');
});



