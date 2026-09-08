<?php

namespace App\Providers;

use App\Models\Aluno;
use App\Policies\AlunoPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Gate::policy(Aluno::class, AlunoPolicy::class);
    }
}