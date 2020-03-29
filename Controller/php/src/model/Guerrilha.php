<?php

class Guerrilha extends Inimigo
{

	public function __construct($pontos, $inteligencia, $forca, $estrategia)
	{
		parent::__construct($pontos, $inteligencia, $forca, $estrategia);
		$this->pontos = $pontos;
		$this->inteligencia = $inteligencia;
		$this->forca = $forca;
		$this->estrategia = $estrategia;
	}
}
