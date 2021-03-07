<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(session('utype') === 'ADM'){
            return $next($request); //passa para a próxima manipulação
       }else{
            session()->flush(); //limpa sessão
            return redirect()->route('login')->with('msgADM','Você não possui permissão de ADMIN !');
       }
        return $next($request); 
    }
}
