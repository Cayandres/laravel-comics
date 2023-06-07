<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
return view('home');
})->name('home');

Route::get('/fumetti', function () {
  $comics = config('comics');       
return view('comics', compact('comics'));
})->name('comics');

