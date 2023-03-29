<?php

$anoNascimento = '1983';

$idade = 2022 - $anoNascimento;

echo $idade . PHP_EOL;

// qlquer string não numerica convertida para número é igual/equivalente a zero

$teste = '1 9 8 3';
var_dump((int) $teste);

var_dump( 0 == '0'); // true
var_dump( 0 == 'Isso aqui'); //false