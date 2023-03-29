<?php

$debitos = array();
$creditos = array();
/*
array_push($debitos, 0.1);
array_push($debitos, 0.2);
array_push($creditos, 0.3);
*/

array_push($debitos, 10); #Trocamos o valor 0.1 para 10, representando os centavos.
array_push($debitos, 20); #Fazemos a mesma coisa, trocando 0.2 para 20.
array_push($creditos, 30); #Trocamos o valor 0.3 para 30.

function saldo(array $debitos, array $creditos) {
    return array_sum($creditos) - array_sum($debitos);
    }


$saldo = saldo($creditos, $debitos);

echo number_format($saldo, 2, ',', '.');


//echo saldo($debitos, $creditos); 