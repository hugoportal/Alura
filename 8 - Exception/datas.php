<?php

$umDia = new DateInterval('P1D'); // Intervalo de 1 dia
// Com DateTime:
$hoje = new DateTime();
echo $hoje->format('d/m'); // Saída 20/03
$hoje->add($umDia); // Altera o valor de $hoje
echo $hoje->format('d/m'); // Saída 21/03

// Com DateTimeImmutable
$hoje = new DateTimeImmutable();
echo $hoje->format('d/m'); // Saída 20/03
$amanha = $hoje->add($umDia); // Não altera o valor de $hoje
echo $hoje->format('d/m'); // Saída 20/03
echo $amanha->format('d/m'); // Saída 21/03


// PERIODOS OU INTERVALO DE DATAS
$inicio = new DateTime('2022-11-21');
$intervalo = new DateInterval('P4Y');
$fim = new DateTime('2042-11-22');
$periodo = new DatePeriod($inicio, $intervalo, 5);
$periodo = new DatePeriod($inicio, $intervalo, $fim);

foreach ($periodo as $data) {
    echo $data->format('d/m/Y') . PHP_EOL;
}
