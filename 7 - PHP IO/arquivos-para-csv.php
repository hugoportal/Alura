<?php

$meusCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), 'Sim'];
    fputcsv($arquivoCsv, $linha, ';');

    //fwrite($arquivoCsv, implode(',', $linha));
}

foreach ($outrosCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), 'Não'];
    fputcsv($arquivoCsv, $linha, ';');

    //fwrite($arquivoCsv, implode(',', $linha));
}

fclose($arquivoCsv);