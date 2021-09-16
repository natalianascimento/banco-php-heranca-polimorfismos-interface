<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel as Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Ok, usuário logado no sistema";

        } else {
            echo "Ops, senha incorreta";
            
        }
    }
}
