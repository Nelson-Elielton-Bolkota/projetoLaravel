@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
    <div class="card shadow-sm mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h1 class="border-bottom border-warning border-3 pb-2 mb-4 h3">
                Editar Cadastro de Aluno
            </h1>

            <form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-bold">Nome:</label>
                    <input type="text" name="nome" value="{{ old('nome', $aluno->nome) }}"
                           class="form-control @error('nome') is-invalid @enderror">
                    @error('nome')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">E-mail:</label>
                    <input type="email" name="email" value="{{ old('email', $aluno->email) }}"
                           class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Data de nascimento:</label>
                    <input type="date" name="data_nascimento" value="{{ old('data_nascimento', $aluno->data_nascimento) }}"
                           class="form-control @error('data_nascimento') is-invalid @enderror">
                    @error('data_nascimento')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Curso:</label>
                    <select name="curso_id" class="form-select @error('curso_id') is-invalid @enderror">
                        @foreach($cursos as $curso)
                            <option value="{{ $curso->id }}" {{ old('curso_id', $aluno->curso_id) == $curso->id ? 'selected' : '' }}>
                                {{ $curso->nome }}
                            </option>
                        @endforeach
                    </select>
                    @error('curso_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <a href="{{ route('alunos.index') }}" class="btn btn-secondary flex-fill">
                        Cancelar
                    </a>
                    <button type="submit" class="btn btn-success flex-fill fw-bold">
                        Salvar Alterações
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection