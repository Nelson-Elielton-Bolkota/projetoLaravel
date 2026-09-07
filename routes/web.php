<?php

use App\Http\Controllers\ALunoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', function () {
    return "sobre";
});

Route::get('/contato', function () {
    return "contato";
});

// Rotas de Exemplo / Parâmetros
Route::get('/produto/{id}', function ($id) {
    return "Exibindo o produto de ID: " . $id;
});

Route::get('/categoria/{id}', function ($id) {
    return "Exibindo a categoria de ID: " . $id;
});

Route::get('/usuario/{id}', function ($id) {
    return "Exibindo o usuário de ID: " . $id;
});


Route::resource('alunos', ALunoController::class);