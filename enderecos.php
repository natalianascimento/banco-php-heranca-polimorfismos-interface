<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petrópolis', 'Qualquer', 'Minha Rua', '144');
$outroEndereco = new Endereco('Rio', 'Centro', 'Uma Rua', '50');

$umEndereco->cidade = "Florianópolis";

echo $umEndereco . PHP_EOL;
exit();
echo $outroEndereco;