<?php

use Illuminate\Support\Facades\Route;

// url di default del sito internet
Route::get('/', function () {
    return view('welcome');
});

Route::get('/chisiamo', function () {
    return view('chi-siamo');
});

Route::get('/contattaci', function () {
    return view('contattaci');
});


Route::get('/faq', function () {
    return view('faq');
});


Route::get('/libri', function () {
    return view('libri');
});
