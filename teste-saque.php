<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{contaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

$conta = new ContaCorrente(
            new Titular(
                new CPF('123.456.789-10'),
                'Vinicius Dias',
                    new Endereco('Petrópolis', 'Bairro Teste', 'Rua Teste', '37')
            )
        );
$conta->depositar(500);
$conta->transfere(1, $conta);
$conta->sacar(100);

echo $conta->recuperaSaldo();