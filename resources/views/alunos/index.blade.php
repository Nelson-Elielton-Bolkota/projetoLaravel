@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Lista de Alunos</h1>
        <a href="{{ route('alunos.create') }}" class="btn btn-success">
            + Cadastrar Aluno
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($alunos->count() > 0)
        <table class="table table-striped table-hover shadow-sm bg-white rounded">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Data de Nascimento</th>
                    <th>Curso</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alunos as $aluno)
                    <tr>
                        <td>{{ $aluno->id }}</td>
                        <td class="fw-bold">{{ $aluno->nome }}</td>
                        <td>{{ $aluno->email }}</td>
                        <td>
                            {{ $aluno->data_nascimento ? \Carbon\Carbon::parse($aluno->data_nascimento)->format('d/m/Y') : 'Não informada' }}
                        </td>
                        <td>
                            <span class="badge bg-primary">
                                {{ $aluno->curso->nome ?? 'Sem Curso' }}
                            </span>
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('alunos.show', $aluno->id) }}" class="btn btn-info btn-sm text-white">
                                    Ver
                                </a>
                                <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-warning btn-sm">
                                    Editar
                                </a>
                                <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST"
                                      onsubmit="return confirm('Tem certeza que deseja excluir este aluno?');" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Excluir
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="bg-white p-4 rounded text-center shadow-sm">
            Nenhum aluno cadastrado.
        </p>
    @endif
@endsection 