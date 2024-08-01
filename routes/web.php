<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio/index');
});

Route::get('/portfolio', function () {
    return view('portfolio/portfolio');
});

