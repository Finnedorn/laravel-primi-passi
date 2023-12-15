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
    $data = [
        'welcome'=> 'benvenuto nella mia prima pagina con Laravel',
        'p'=>'clicca su "about" per proseguire'
    ];
    return view('home', $data);
})->name('home');

Route::get('/about', function () {
    $welcome = [
        'rejoyce'=> 'yeeeeeeee!!!!',
    ];
    return view('about', $welcome);
})->name('about');
