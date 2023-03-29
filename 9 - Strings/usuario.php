<?php
$nome = 'Hugo Leão';
$email = 'hugowf@gmail.com.br';
$senha = '123456789';

echo mb_strlen($senha) . PHP_EOL;

if ( mb_strlen($senha) < 8){
    echo "Senha insegura" . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);


echo mb_strtoupper($usuario) . PHP_EOL;
//echo mb_strtolower($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);
//var_dump(explode(' ', $nome));
echo "Nome: $nome " . PHP_EOL;
echo "SobreNome: " . $sobrenome . PHP_EOL;

