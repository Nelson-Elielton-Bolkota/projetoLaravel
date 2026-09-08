<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use App\Http\Requests\AlunoRequest;
use Illuminate\Support\Facades\Gate;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::with('curso')
            ->latest()
            ->get();

        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        Gate::authorize('create', Aluno::class);

        $cursos = Curso::all();

        return view('alunos.create', compact('cursos'));
    }

    public function store(AlunoRequest $request)
    {
        Gate::authorize('create', Aluno::class);

        Aluno::create($request->validated());

        return redirect()
            ->route('alunos.index')
            ->with('success', 'Aluno cadastrado com sucesso!');
    }

    public function show(Aluno $aluno)
    {
        $aluno->load('curso');

        return view('alunos.show', compact('aluno'));
    }

    public function edit(Aluno $aluno)
    {
        Gate::authorize('update', $aluno);

        $cursos = Curso::all();

        return view('alunos.edit', compact('aluno', 'cursos'));
    }

    public function update(AlunoRequest $request, Aluno $aluno)
    {
        Gate::authorize('update', $aluno);

        $aluno->update($request->validated());

        return redirect()
            ->route('alunos.show', $aluno)
            ->with('success', 'Aluno atualizado com sucesso!');
    }

    public function destroy(Aluno $aluno)
    {
        Gate::authorize('delete', $aluno);

        $aluno->delete();

        return redirect()
            ->route('alunos.index')
            ->with('success', 'Aluno excluído com sucesso!');
    }
}