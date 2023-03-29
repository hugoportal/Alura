<?php

require_once 'autoload.php';

use \Alura\Banco\Modelo\{CPF};
use \Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor};

$umFuncionario = new Desenvolvedor(
    'Amado Batista',
    new CPF('123.456.789-11'),
    1000);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Alita',
    new CPF('111.222.333-45'),
    3000);

$umDiretor = new Diretor(
    'AshFord & Simpson',
    new CPF('111.222.333-00'),
    5000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);

echo $controlador->recuperaTotal();
