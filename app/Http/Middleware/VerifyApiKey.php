<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
 	$apiKey = $request->segment(1); // Obtener el segmento de la URL (en este caso, "new-icmr")
        //$expectedApiKey = 'new-lujandev'; // Clave esperada
	$apiKey = $request->query('api_key');

// Clave esperada
        $expectedApiKey = 'new-lujandev';

        if ($apiKey !== $expectedApiKey) {
            //return response()->json(['error' => 'No autorizado'], 401);
             abort(401, 'No autorizado');
	}

        return $next($request);
    }
}
