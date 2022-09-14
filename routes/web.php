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
    $pages = ['/hello','/mainpage','/secondarypage'];
    return view('home',compact('pages'));
});

Route::get('/hello', function () {
    
    return view('hello-world',);
});
Route::get('/mainpage', function () {
    
    return view('mainpage',);
});
Route::get('/secondarypage', function () {
    
    return view('secondarypage',);
});