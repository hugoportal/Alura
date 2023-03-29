<?php

require_once 'autoload.php';
/* Isso foi substituído pelo AUTOLOAD
require_once 'src/Modelo/Conta/Conta.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/CPF.php'; */

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;

$endereco = new Endereco('Petropolis', 'um bairro', 'minha rua', '71B');
$hugo = new Titular( new CPF('749.161.902-97'), 'hugo leao', $endereco);
$primeiraConta = new Conta($hugo);
var_dump($primeiraConta);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarSaldo() . PHP_EOL;
//echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
//echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;

$mari = new Titular (new CPF('749.161.902-97'), 'Mari leao', $endereco);
$segundaConta = new Conta($mari);

$outroEndereco = new Endereco('Brasilia', 'Qd203', 'C', '18B');
$paty = new Titular (new CPF('749.111.111-97'), 'paty leao', $outroEndereco);
$terceiraConta = new Conta($paty);

echo Conta::recuperaNumeroDeContas();



