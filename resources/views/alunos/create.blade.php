@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')

    <h1>Cadastrar Aluno</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('alunos.store') }}" method="POST">

        @csrf

        <label>Nome:</label>
        <input type="text" name="nome">

        <br><br>

        <label>E-mail:</label>
        <input type="email" name="email">

        <br><br>

        <label>Data de nascimento:</label>
        <input type="date" name="data_nascimento">

        <br><br>

        <label>Curso:</label>

        <select name="curso_id">

            @foreach($cursos as $curso)

                <option value="{{ $curso->id }}">
                    {{ $curso->nome }}
                </option>

            @endforeach

        </select>

        <br><br>

        <button type="submit">
            Cadastrar
        </button>

    </form>

@endsection