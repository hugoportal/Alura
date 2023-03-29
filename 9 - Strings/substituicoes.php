<?php

$texto = 'Texto com qualquer coisa porra e caramba';

// o que? Pelo quê? Onde?
echo str_replace(
    ['porra', 'caramba'],
    ['p***a', 'c*****a'],
    $texto) . PHP_EOL;

echo strtr($texto, 'porra', '****@') . PHP_EOL;
echo strtr($texto, ['porra' => 'p', 'caramba' => 'c']) . PHP_EOL;

/*
regex
\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}
exemplos:
(96) 98118 - 0107
(96) a118 - 0107
(96) 98118 - 010a
96) 98118 - 0107
(96 98118 - 0107
96 98118 - 0107
*/