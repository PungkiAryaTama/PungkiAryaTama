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

Route::get('/profil', 'BlogController@profil',function () {
    return view('profil');
});

Route::get('/experience', 'BlogController@experience', function () {
    return view('experience');
});

Route::get('/portofolio', 'BlogController@portofolio', function () {
    return view('portofolio');
});
