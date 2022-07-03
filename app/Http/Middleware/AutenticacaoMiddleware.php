<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {
        // Verificar se o usuario possui acesso a rota;
        echo $metodo_autenticacao.' - '.$perfil.'<br>';

        if($metodo_autenticacao == 'padrao') {
            echo 'Verificar o usuario e senha no BD'.' - '.$perfil.'<br>';
        }

        if($metodo_autenticacao == 'ldap') {
            echo 'Verificar o usuario e senha no AD'.' - '.$perfil.'<br>';
        }

        //return $next($request);
        return Response('Acesso negado! A rota acessada precisa de autenticação!!!');
    }
}
