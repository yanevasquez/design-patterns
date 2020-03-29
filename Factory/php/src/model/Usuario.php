<?php

abstract class Usuario
{
	private $nome;
	private $genero;

	function __construct($nome, $genero)
	{
		$this->nome = $nome;
		$this->genero = $genero;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getGenero()
	{
		return $this->genero;
	}

	public function setGenero($genero)
	{
		$this->genero = $genero;
	}

	public function getSaudacao()
	{
		return $this->nome . ' ' . $this->genero;
	}
}
