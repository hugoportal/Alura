<?php

require_once 'MeuFiltro.php';

$arquivosCursos = fopen('lista-cursos.txt', 'r');

stream_filter_register('alura.partes', MeuFiltro::class);
//stream_filter_append($arquivosCursos, 'string.toupper');
stream_filter_append($arquivosCursos, 'alura.partes');

echo fread($arquivosCursos, filesize('lista-cursos.txt'));


