<?php

use App\Http\Controllers\ALunoController;
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
Route::get('/produtos', [ALunoController::class, 'index']);
Route::get('/produtos/criar', [ALunoController::class, 'create']);
Route::post('/produtos', [ALunoController::class, 'store']);
Route::get('/produtos/{id}', [ALunoController::class, 'show']);
Route::get('/produtos/{id}/editar', [ALunoController::class, 'edit']);
Route::put('/produtos/{id}', [ALunoController::class, 'update']);
Route::delete('/produtos/{id}', [ALunoController::class, 'destroy']);