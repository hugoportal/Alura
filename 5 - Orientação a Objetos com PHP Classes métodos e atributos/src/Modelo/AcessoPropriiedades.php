<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriiedades
{
    public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

}