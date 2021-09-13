<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor('Vinicius Dias', new CPF('123.456.789-10'), 1000);
$umaFuncionaria = new Gerente('Patricia Dias', new CPF('987.654.321-10'), 3000);
$umDiretor = new Diretor('Ana Dias', new CPF('123.654.789-10'), 5000);

$umFuncionario->sobeDeNivel();

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);


echo $controlador->recuperaTotal();