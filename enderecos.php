<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petrópolis', 'Qualquer', 'Minha Rua', '144');
$outroEndereco = new Endereco('Rio', 'Centro', 'Uma Rua', '50');

echo $umEndereco->cidade;
exit();

echo $umEndereco . PHP_EOL;
echo $outroEndereco;