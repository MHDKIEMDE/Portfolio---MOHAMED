<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
});

Route::get('/home', function () {
    return view('index');
});


Route::get('/', function () {
    return view('accueil');
});

Route::get('/test', function () {
    return 'Le serveur fonctionne bien';
});