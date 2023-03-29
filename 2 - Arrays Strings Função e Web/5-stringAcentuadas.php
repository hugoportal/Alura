<?php

$string = 'Teste de integração com PHP'; //27 espaços

echo strlen($string) . PHP_EOL;
echo strtoupper($string) . PHP_EOL;
echo "---------". PHP_EOL;
echo mb_strlen($string) . PHP_EOL;
echo mb_strtoupper($string) . PHP_EOL;
echo "---------". PHP_EOL;

$convercao = mb_convert_encoding($string, 'ISO-8859-1','UTF-8');
echo $convercao . PHP_EOL;
echo "---------". PHP_EOL;

$titulo = mb_convert_case($string, MB_CASE_TITLE);
echo $titulo . PHP_EOL;
