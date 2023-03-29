<?php

$conta1 = [
    'titular' => 'Vinicios',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'José',
    'saldo' => 350
];


//echo $conta1['titular'] . PHP_EOL;


$contasCorrentes = [$conta1, $conta2, $conta3];


for ($i=0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
    
}

echo "--------" . PHP_EOL;


// EXEMPLO USANDO FOREACH

$contasCorrentes = [

    12345678900 => [
        'titular' => 'Vinicios',
        'saldo' => 1000
    ], 
    98765432111 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ], 
    15975325877 => [
        'titular' => 'José',
        'saldo' => 350
    ]
    
];


$contasCorrentes[98765432112] = [
    'titular' => 'Hugo',
    'saldo' => 999000
];

$contasCorrentes[] = [
    'titular' => 'Layla',
    'saldo' => 999000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " - " . $conta['titular']  . PHP_EOL;

}

