<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    //private $cpf;
    //private string $nome;
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        //$this->cpf = $cpf;
        //$this->nome = $nome;
        $this->endereco = $endereco;
    }

    /*
    public function recuperaCpf(): string{
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome(): string{
        return $this->nome;
    } 
    */

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }


    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}