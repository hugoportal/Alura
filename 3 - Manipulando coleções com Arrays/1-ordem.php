<?php
/*
$notas = [
    'um',
    'dois',
    'três'

];

echo 'Desordenadas: ';
var_dump($notas);

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo 'Ordenadas: ';
var_dump($notasOrdenadas);
*/

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicios',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],

];

/*
Se nota desse meu primeiro array for maior eu retorno um número negativo, 
se a nota do segundo array for maior eu retorno um número positivo, 
se elas forem iguais eu retorno 0.
*/

function ordenaNotas(array $nota1, array $nota2): int {

    /*
     Se o primeiro elemento antes do operador for menor do que o elemento depois do operador ele retorna -1, 
     se o primeiro elemento for maior ele retorna 1 
     e se eles forem iguais ele retorna 0.
    */

    // return $nota1['nota'] <=> $nota2['nota']; // assim ordena de forma crescente
    return $nota2['nota'] <=> $nota1['nota']; // assim ordena de forma crescente
    /*
    a linha acima substitui todos os ifs abaixo
    if ($nota1['nota'] > $nota2['nota']) {
        return -1;
    }
    
    if ($nota2['nota'] > $nota1['nota']) {
        return 1;
    }

    return 0; // nesse caso nota1 === nota2
    */

}

usort($notas, 'ordenaNotas');
var_dump($notas);