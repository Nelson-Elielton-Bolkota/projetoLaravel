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
    return view("contato");
});

Route::get('/produto/{id}', function ($id) {
    return "Exibindo o produto de ID: " . $id;
});

Route::get('/categoria/{id}', function ($id) {
    return "Exibindo a categoria de ID: " . $id;
});

Route::get('/usuario/{id}', function ($id) {
    return "Exibindo o usuário de ID: " . $id;
});
