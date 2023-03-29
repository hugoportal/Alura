<?php

function exibeMensagem( string $mensagem) {
//    echo $mensagem . PHP_EOL;
        echo $mensagem . '<br>';
}

function sacar(array $conta, float $valor): array {

    if ($valor > $conta['saldo']) {
        exibeMensagem("Você não pode sacar esse valor!!!");
    } else {
        $conta['saldo'] -= $valor;
    }
    return $conta;
}

function depositar(array $conta, float $valor): array {

    if ($valor > 0 ) {
        $conta['saldo'] += $valor;
        exibeMensagem("Deposito efetuado de R$ $valor!!!");
        
    } else {
        exibeMensagem("O valor do deposito precisar ser maior que Zero");
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta) { //passagem por referencia
    $conta['titular'] = strtoupper($conta['titular']);

}

function exibeConta(array $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo </li>";
}


