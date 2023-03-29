<?php

/* PARA LEITURA LINHA A LINHA DO ARQUIVO

$arquivo = fopen('lista-cursos.txt', 'r');

while (!feof($arquivo))
{
    $curso = fgets($arquivo);
    echo $curso;
}

// PARA LEITURA TOTAL DO ARQUIVO DE UMA SÓ VEZ
$tamanhoDoArquivo = filesize('lista-cursos.txt');
$cursos = fread($arquivo, $tamanhoDoArquivo);

fclose($arquivo);
*/

$cursos = file_get_contents('lista-cursos.txt');
$curso = file('lista-cursos.txt'); // cada linha do arquivo vira um item de um array

echo $cursos . PHP_EOL;
var_dump($curso);





