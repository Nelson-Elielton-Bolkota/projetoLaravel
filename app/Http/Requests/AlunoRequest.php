<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule; // <-- Importe esta classe

class AlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // Pega a instância do Aluno injetada na rota (se existir)
        $aluno = $this->route('aluno');

        return [
            'nome' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('alunos', 'email')->ignore($aluno),
            ],
            'data_nascimento' => 'nullable|date',
            'curso_id' => 'required|exists:cursos,id',
        ];
    }
}