<?php
require_once("Mulher.php");
require_once("Homem.php");
require_once("GeneroX.php");

class SaudacaoFactory
{

	public static function getUser($nome, $genero)
	{
		if ($genero == "feminino") {
			return new Mulher($nome, $genero);
		} elseif ($genero == "masculino") {
			return new Homem($nome, $genero);
		} else {
			return new GeneroX($nome, "");
		}
	}
}
