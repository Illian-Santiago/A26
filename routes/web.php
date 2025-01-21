<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Eager Loading
    $autores = App\Models\Author::with('books')->get();

    // Lazy Eager Loading
    // $autores = App\Models\Author::all();

    return view('welcome', compact('autores'));
});
