<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AppAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            return redirect('/login'); // Redirect to the login page if not authenticated.
        }

        // If the user is authenticated, proceed with the request
        return $next($request);
    }
}