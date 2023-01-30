<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.prodotti');
});

Route::get('/prodotto', function () {
    return view('pages.prodotto');
});
