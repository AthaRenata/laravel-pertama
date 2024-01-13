<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AccessToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $accessToken = $request->input('access_token');

        if ($accessToken && $this->isValidAccessToken($accessToken)) {
            return $next($request);
        }

        return redirect('register');
    }
    private function isValidAccessToken($accessToken)
    {
        return date('Y-m-d', strtotime($accessToken)) === date('Y-m-d');
    }
}
