<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class kaprodi
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->role == 'kaprodi') {
            return $next($request);
        }

        abort(403, 'Akses ditolak. Bukan kaprodi.');
    }
}
