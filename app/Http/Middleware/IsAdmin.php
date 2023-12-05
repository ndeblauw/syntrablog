<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if( auth()->user()?->is_admin !== true) {
            abort(403);
        }

        return $next($request);
    }
}
