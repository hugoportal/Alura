<?php

$count = 1;

while ($count <= 2) {
    echo "#$count" . PHP_EOL;
    $count++;
}

echo "---------" . PHP_EOL;

for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) {
        continue; // ou pode-se utilizar o break; para parar o loop e sair dele
    }
        echo "#$contador" . PHP_EOL;
}

echo "---------" . PHP_EOL;

