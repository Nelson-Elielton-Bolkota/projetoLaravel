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

// Rotas do Módulo de Alunos (Corrigidas com nome e endpoint correto)
Route::get('/alunos', [ALunoController::class, 'index'])->name('alunos.index');
Route::get('/alunos/criar', [ALunoController::class, 'create'])->name('alunos.create');
Route::post('/alunos', [ALunoController::class, 'store'])->name('alunos.store');
Route::get('/alunos/{id}', [ALunoController::class, 'show'])->name('alunos.show');
Route::get('/alunos/{id}/editar', [ALunoController::class, 'edit'])->name('alunos.edit');
Route::put('/alunos/{id}', [ALunoController::class, 'update'])->name('alunos.update');
Route::delete('/alunos/{id}', [ALunoController::class, 'destroy'])->name('alunos.destroy');