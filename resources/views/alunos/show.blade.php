@extends('layouts.app')

@section('title', 'Aluno')

@section('content')

    <h1>{{ $aluno->nome }}</h1>

    <p>
        <strong>E-mail:</strong>
        {{ $aluno->email }}
    </p>

    <p>
        <strong>Curso:</strong>
        {{ $aluno->curso->nome }}
    </p>

    <a href="{{ route('alunos.edit', $aluno) }}">
        Editar
    </a>

@endsection