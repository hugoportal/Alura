<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};


require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-00'),
        'Joao Canabrava'
        , new Endereco('Macapá', 'Santa Inês', 'Av Pedro Lazarino', '151')
    )
);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperarSaldo();