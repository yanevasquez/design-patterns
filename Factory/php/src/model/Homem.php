<?php

require_once("Usuario.php");

class Homem extends Usuario
{

    public function __construct($nome, $genero)
    {
        parent::__construct($nome, $genero);
        $this->nome = $nome;
        $this->genero = $genero;
    }

    public function getSaudacao()
    {
        return "Olá, Sr " . $this->nome . "!" . "\n";
    }
}
