<?php

class Inimigo
{

	protected $inteligencia;
	protected $forca;
	protected $estrategia;
	protected $pontos;

	public  function __construct($pontos, $inteligencia, $forca, $estrategia)
	{
		$this->pontos= $pontos;
		$this->inteligencia = $inteligencia;
		$this->forca = $forca;
		$this->estrategia = $estrategia;
	}

	public function getPontosVitoria()
	{
		return  $this->pontos;
	}

	public function setPontosVitoria($pontos)
	{
		$this->pontos = $pontos;
	}

	public function getInteligencia()
	{
		return $this->inteligencia;
	}

	public function setInteligencia($inteligencia)
	{
		$this->inteligencia = $inteligencia;
	}

	public function getForca()
	{
		return $this->forca;
	}

	public function setForca($forca)
	{
		$this->forca = $forca;
	}

	public function getEstrategia()
	{
		return $this->estrategia;
	}

	public function setEstrategia($estrategia)
	{
		$this->estrategia = $estrategia;
	}
}
