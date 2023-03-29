<?php

$idade1 = 21;
$idade2 = 23;
$idade3 = 45;

$idadeLista = [21, 23, 45, 51, 22, 30, 95];

$primeiraIdade = $idadeLista[0];
$segundaIdade = $idadeLista[1];

//echo "$primeiraIdade \n";
//echo "$segundaIdade \n";

// LOOP Lista

$qtdLista = count($idadeLista);

for ($i=0 ; $i<$qtdLista; $i++) {
    echo $idadeLista[$i] . PHP_EOL;
}

// Função List

list($iHugo, $iJoao, $iMaria) = $idadeLista;
echo $iMaria;