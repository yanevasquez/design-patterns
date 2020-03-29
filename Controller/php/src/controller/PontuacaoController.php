<?php

require_once("../model/Inimigo.php");
require_once("../model/Espiao.php");
require_once("../model/Exercito.php");
require_once("../model/Guerrilha.php");
require_once("../model/Inimigo.php");

class PontuacaoController
{

	public function batalha($inimigo)
	{
		return "Pontuação: " . $inimigo->getPontosVitoria() . " \n";
	}
}
