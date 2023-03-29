<?php

$nome = 'Hugo Portal';

$ehDaMinhaFamilia = str_contains($nome, 'Portall');

    if( $ehDaMinhaFamilia ) {
        echo "$nome é da minha família " . PHP_EOL;
    } else {
        echo "$nome não é da minha família " . PHP_EOL;
    }