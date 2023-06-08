<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
return view('home');
})->name('home');

Route::get('/fumetti', function () {
  $comics = config('comics');       
  return view('comics', compact('comics'));
})->name('comics');

Route::get('/fumetto/{slug}', function ($slug) {
  $comics = config('comics');
  $comicFiltered = array_filter($comics, fn($item)=> $item['slug'] === $slug);
  $comic = $comicFiltered[array_key_first($comicFiltered)];
  return view('product' , compact('comic'));
})->name('product');

