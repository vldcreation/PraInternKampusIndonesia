<?php

namespace App\Http\Middleware;

use Closure;

class SecretKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $reqKey = $request->header('SECRET_KEY');
        $expect = '$2y$10$VYgpSCxeEZxwrgrX2CaZ8OvNazRaOAvEVW0M41qFRHBHc23qYaYHq';
        if(!\Hash::check($reqKey,$expect)){
            return response()->json([
                'message' => 'Invalid API Key'
            ]);
        }
        return $next($request);
    }
}
