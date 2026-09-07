<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sobre', function () {
    return view('sobre');
});
Route::get('/alunos', function () {
    return view('alunos');
});
Route::get('/contato', function () {
    return view('contato');
});
