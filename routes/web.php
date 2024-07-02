<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/operacao', function () {
    return view('operacao');
});

Route::any('/conexao.php', function () {
    return view('conexao');
});