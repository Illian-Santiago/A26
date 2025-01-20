<?php

use Illuminate\Support\Facades\Route;
use App\Models\Author;

Route::get('/', function () {
    $autores = Author::with('books')->get();

    return view('welcome', compact('autores'));
});
