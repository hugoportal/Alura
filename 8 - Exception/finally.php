<?php

/*
$arquivo = fopen('php://temp', 'w');

try {
    fwrite($arquivo, 'Qlquer coisa dentro do arquivo');

//    echo "Executando... " . PHP_EOL;
//    throw new Exception("Exceção aqui");
} catch (Throwable $e) {
    echo "Erro ao escrever no arquivo." . PHP_EOL;
} finally {
    echo "Finally" . PHP_EOL;
    fclose($arquivo);
}
*/
error_reporting(E_ALL);
ini_set('display_errors', 1); // 0 não exibir erros OU 1 exibir todos os erros
ini_set('log_errors', 1);
ini_set('error_log', '/opt/files/logs-error');

function a()
{
    try {
        echo "Código";
        throw new Exception();
        return 0;
    } catch (Throwable $e) {
        echo "Problema";
        return 1;
    } finally {
        echo PHP_EOL . "Final da Função";
    }

}

echo a();