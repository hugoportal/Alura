<?php

$csv = ',.Vinicius Dias,24.,';
$numero = '24';

echo trim($csv, '.,') . PHP_EOL;
echo ltrim($csv, '.,') . PHP_EOL;
echo rtrim($csv, '.,') . PHP_EOL;
$dir = '/opt/files';

var_dump(!file_exists($dir) == true);