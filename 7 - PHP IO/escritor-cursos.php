<?php
/* OUTRA MANEIRA ABAIXO
//$arquivo = fopen('cursos-php.txt', 'w'); // w de write
$arquivo = fopen('cursos-php.txt', 'a'); // a de append, o cursor ficará no final do arquivo assim o mesmo não é reescrito toda vez

$curso = "Curso de Linux II: programas, processos e pacotes";

fwrite($arquivo, $curso, '17'); // escrever os primeira caracteres.
fwrite($arquivo, $curso);

fclose($arquivo);
*/

//$curso = "Curso de Linux II: programas, processos e pacotes";
$curso = "\nCurso de Linux III: Hiper Mega Blaster";

file_put_contents('cursos-php.txt', $curso, FILE_APPEND);