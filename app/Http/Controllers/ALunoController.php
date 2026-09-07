<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class ALunoController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = Aluno::all();

        $alunosDoCurso = Aluno::where('curso_id', 1)->get();

        $alunosFiltradosNome = Aluno::where('nome', 'LIKE', '%João%')->get();

        $alunosRecentes = Aluno::latest()->get();

        $totalAlunos = Aluno::count();

        return view('alunos.index', compact(
            'alunos',
            'alunosDoCurso',
            'alunosFiltradosNome',
            'alunosRecentes',
            'totalAlunos'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
