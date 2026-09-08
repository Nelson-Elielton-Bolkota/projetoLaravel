<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        $user = $request->user();

        if (!$user) {
            return redirect('/login');
        }

        if ($user->role !== $role) {
            abort(403, 'Acesso não autorizado.');
        }

        return $next($request);
    }
}