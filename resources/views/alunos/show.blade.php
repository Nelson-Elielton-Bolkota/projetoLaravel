@extends('layouts.app')

@section('title', 'Detalhes do Aluno')

@section('content')
    <div class="card shadow-sm mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h1 class="border-bottom border-primary border-3 pb-2 mb-4 h3">
                Ficha do Aluno
            </h1>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mb-3">
                <strong class="d-block text-secondary">Nome Completo:</strong>
                <span class="fs-5 fw-bold">{{ $aluno->nome }}</span>
            </div>

            <div class="mb-3">
                <strong class="d-block text-secondary">E-mail Cadastrado:</strong>
                <span>{{ $aluno->email }}</span>
            </div>

            <div class="mb-3">
                <strong class="d-block text-secondary">Data de Nascimento:</strong>
                <span>
                    {{ $aluno->data_nascimento ? \Carbon\Carbon::parse($aluno->data_nascimento)->format('d/m/Y') : 'Não informada' }}
                </span>
            </div>

            <div class="mb-4">
                <strong class="d-block text-secondary">Curso Vinculado:</strong>
                <span class="badge bg-primary mt-1">
                    {{ $aluno->curso->nome ?? 'Sem Curso' }}
                </span>
            </div>

            <hr>

            <div class="d-flex gap-2">
                <a href="{{ route('alunos.index') }}" class="btn btn-secondary flex-fill">
                    Voltar para Lista
                </a>
                <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-warning flex-fill fw-bold">
                    Editar Cadastro
                </a>
            </div>
        </div>
    </div>
@endsection