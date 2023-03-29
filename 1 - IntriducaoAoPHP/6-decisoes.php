<?php

$idade = 19;
$nome = "Hugo";
$NumDePessoas = 1;

echo "Você só poderá entrar se tiver a partir de 18 anos ";
echo "ou a partir de 16 anos acompanhado." . PHP_EOL;
echo "Você tem $idade anos. ";


    if ($idade >= 18) {
    echo "Você pode entrar" . PHP_EOL;
    } else if ($idade >= 16 && $NumDePessoas > 1) {
        echo "Está acompanhado(a), pode entrar" . PHP_EOL;
    } else {
        echo "Você não pode entrar pois tem $idade anos." . PHP_EOL;
    }
echo "Adeus";