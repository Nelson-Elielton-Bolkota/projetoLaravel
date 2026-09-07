<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => [
                'required',
                'string',
                'min:3',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
            ],

            'data_nascimento' => [
                'nullable',
                'date',
            ],

            'curso_id' => [
                'required',
                'exists:cursos,id',
            ],
        ];
    }
    public function messages(): array
{
    return [
        'nome.required' => 'O nome do aluno é obrigatório.',
        'nome.min' => 'O nome deve possuir pelo menos 3 caracteres.',

        'email.required' => 'O e-mail é obrigatório.',
        'email.email' => 'Digite um e-mail válido.',

        'curso_id.required' => 'Selecione um curso.',
        'curso_id.exists' => 'O curso selecionado não existe.',
    ];
}
}