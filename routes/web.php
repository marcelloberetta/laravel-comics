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


/* Homepage */
Route::get('/', function () {

    $comics = config('items');

    return view('homepage', ['cards'=> $comics]);
})->name('homepage');


/* Comics */

Route::get('/comics', function(){
    return view('comics');
})->name('comics');

/* Info */

Route::get('/news', function(){
    return view('news');
})->name('news');