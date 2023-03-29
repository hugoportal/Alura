<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Macapá', 'Santa Ines', 'Pedro Lazarino', 151);
$outroEndereco = new Endereco('Santana', 'Barreirão', 'Hamilton Silva', 50);



echo $outroEndereco . PHP_EOL;
echo $umEndereco->recuperaRua() . ", " . $umEndereco->recuperaBairro() . ", " . $umEndereco->recuperaNumero() . ", " . $umEndereco->recuperaCidade();
