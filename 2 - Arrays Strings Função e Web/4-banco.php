<?php

//include 'funcoes.php'; // Só exibe warning e não interrompe a execução do script
require_once 'funcoes.php'; // require interrompe a execução do script e ONCE caso já tenha sido incluido ele não dará erro

$contasCorrentes = [

'123.456.789-00' => [
    'titular' => 'Vinicios',
    'saldo' => 1000
], 
'987.654.321-11' => [
    'titular' => 'Maria',
    'saldo' => 10000
], 
'159.753.258-77' => [
    'titular' => 'José',
    'saldo' => 350
]

];
/* ALGUMAS OPERAÇÕES DE SAQUE E DEPÓSITO
$contasCorrentes['987.654.321-11'] = sacar($contasCorrentes['987.654.321-11'], 500);
$contasCorrentes['159.753.258-77'] = sacar($contasCorrentes['159.753.258-77'], 500);
$contasCorrentes['159.753.258-77'] = depositar($contasCorrentes['159.753.258-77'], 1800);
$contasCorrentes['987.654.321-11'] = depositar($contasCorrentes['987.654.321-11'], 0.50);
$contasCorrentes['159.753.258-77'] = depositar($contasCorrentes['159.753.258-77'], -1800);
*/

// ALTERANDO O NOME DO TÍTULAR PARA MAIÚSCULO
titularComLetrasMaiusculas($contasCorrentes['123.456.789-00']);

// REMOVENDO UMA CONTA
unset($contasCorrentes['159.753.258-77']);

/*
//------------------
echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
//    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    //// ['titular' => $titular, 'saldo' => $saldo] = $conta;
//    exibeMensagem(
    exibeConta($conta);
//        "$cpf - " . $conta['titular'] . " Saldo: R$ " . $conta['saldo']
//        "$cpf - $conta[titular] Saldo: R$ $conta[saldo]"
//        "$cpf - {$conta['titular']} Saldo: R$ {$conta['saldo']}"
//        "$cpf $titular Saldo: R$ $saldo"
//    );
}
echo "</ul>";
*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt><h3><?= $conta['titular']; ?> - <?= $cpf ?></h3></dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>


</body>
</html>