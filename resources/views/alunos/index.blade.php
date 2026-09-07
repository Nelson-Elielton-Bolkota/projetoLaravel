@extends('layouts.app')

@section('title', 'Alunos')

@section('content')

    <h1>Lista de Alunos</h1>

    @if($alunos->count() > 0)

        <ul>
            @foreach($alunos as $aluno)

                <li>
                    {{ $aluno->nome }}
                </li>

            @endforeach
        </ul>

    @else

        <p>Nenhum aluno cadastrado.</p>

    @endif

@endsection