<?php

$telefones = ['(61) 98118 - 0107', '(96) 8118 - 9999', '(96) 2222 - 2222'];

echo implode(', ', $telefones) . PHP_EOL;

foreach ($telefones as $telefone) {
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';

    $telefoneValido = preg_match(
        $regex,
        $telefone,
        $correspondencia // armazena o que encontou da expressão regular
    );
    // var_dump($correspondencia);
    if ($telefoneValido) {
        echo 'Telefone válido. ' . PHP_EOL;
    } else {
        echo 'Telefone inválido. ' . PHP_EOL;
    }

    echo preg_replace(
        $regex,
        '(XX) \2', //grupos de captura
        $telefone
    ) . PHP_EOL;

}



