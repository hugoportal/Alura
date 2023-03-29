<?php

$notas = [
    "Roberto" => 7,
    'Joao' => 8,
    'Ana' => 10,
    'Maria' => 9,
    'Vinicios' => 6
];

/*
sort($notas);
var_dump($notas);
rsort($notas); // ordem inversa
var_dump($notas);
asort($notas); // manter as chaves
var_dump($notas);
arsort($notas); // manter as chaves
var_dump($notas);
//ordenar pelas chaves (nome)
ksort($notas);
var_dump($notas);
krsort($notas);
var_dump($notas); 
*/


if ( is_array($notas) ){
    echo "Sim, isso é um array" . PHP_EOL;
}

var_dump(array_is_list($notas));

