<?php

$vale = '00004283660200000';
echo $vale . PHP_EOL;

//$vale = '00004283660200000';
//echo $vale . PHP_EOL;
$vale2 = ltrim(rtrim($vale, '0'), '0');
echo $vale2 . PHP_EOL;


echo "Tamanho da String: " . strlen($vale2) . PHP_EOL;

