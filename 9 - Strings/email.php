<?php


function geraEmail(string $nome): void
{

    $conteudoEmail = <<<FINAL
    Olá, $nome!

    Estamos entrando em contato para avisá-lo
    {motivo do contato}

    {assinatura}
    
    FINAL;

    echo $conteudoEmail;
}

geraEmail('Hugo Portal');