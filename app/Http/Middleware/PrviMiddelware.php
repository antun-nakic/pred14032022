<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PrviMiddelware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $sime)
    {
        $this->prenosiviParametar = "ejkghjdsfhg";
        $request->ovoKorisnikNijePoslao = "neka vrijednost " . $sime;
        return $next($request);
    }

    public function terminate($request, $response)
    {
        $this->prenosiviParametar;
        return "nesto";
    }
}
