<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Aluno;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Criamos os 3 Cursos manualmente e guardamos em variáveis para usar o ID deles
        $curso1 = Curso::create([
            'nome' => 'Engenharia de Software'
        ]);

        $curso2 = Curso::create([
            'nome' => 'Análise e Desenvolvimento de Sistemas'
        ]);

        $curso3 = Curso::create([
            'nome' => 'Ciência da Computação'
        ]);


        Aluno::create([
            'nome' => 'Ana Souza',
            'email' => 'ana@escola.com',
            'data_nascimento' => '2005-01-15',
            'curso_id' => $curso1->id, // Associado ao Curso 1
        ]);

        Aluno::create([
            'nome' => 'Bruno Lima',
            'email' => 'bruno@escola.com',
            'data_nascimento' => '2004-03-22',
            'curso_id' => $curso2->id, // Associado ao Curso 2
        ]);

        Aluno::create([
            'nome' => 'Carlos Gomes',
            'email' => 'carlos@escola.com',
            'data_nascimento' => '2005-07-08',
            'curso_id' => $curso3->id, // Associado ao Curso 3
        ]);

        Aluno::create([
            'nome' => 'Daniela Reis',
            'email' => 'daniela@escola.com',
            'data_nascimento' => '2006-02-14',
            'curso_id' => $curso1->id, // Associado ao Curso 1
        ]);

        Aluno::create([
            'nome' => 'Eduardo Costa',
            'email' => 'eduardo@escola.com',
            'data_nascimento' => '2005-11-30',
            'curso_id' => $curso2->id, // Associado ao Curso 2
        ]);

        Aluno::create([
            'nome' => 'Fernanda Melo',
            'email' => 'fernanda@escola.com',
            'data_nascimento' => '2004-12-12',
            'curso_id' => $curso3->id, // Associado ao Curso 3
        ]);

        Aluno::create([
            'nome' => 'Gabriel Santos',
            'email' => 'gabriel@escola.com',
            'data_nascimento' => '2005-09-09',
            'curso_id' => $curso1->id, // Associado ao Curso 1
        ]);

        Aluno::create([
            'nome' => 'Helena Rocha',
            'email' => 'helena@escola.com',
            'data_nascimento' => '2006-05-04',
            'curso_id' => $curso2->id, // Associado ao Curso 2
        ]);

        Aluno::create([
            'nome' => 'Igor Cardoso',
            'email' => 'igor@escola.com',
            'data_nascimento' => '2005-04-18',
            'curso_id' => $curso3->id, // Associado ao Curso 3
        ]);

        Aluno::create([
            'nome' => 'Julia Vieira',
            'email' => 'julia@escola.com',
            'data_nascimento' => '2004-08-25',
            'curso_id' => $curso1->id, // Associado ao Curso 1
        ]);
    }
}