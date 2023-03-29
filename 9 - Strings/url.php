<?php

$url = 'http://alura.com.br';

str_starts_with($url, 'https');

if (str_starts_with($url, 'https')){
    echo "É uma URL segura." . PHP_EOL;
} else {
    echo "Não é uma URL segura." . PHP_EOL;
}

echo PHP_EOL;


if (str_ends_with($url, ".br")) {
    echo "É um dominio do Brasil" . PHP_EOL;
} else {
    echo "Não é um dominio do Brasil" . PHP_EOL;
}
