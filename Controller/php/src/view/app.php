<?php

require_once("../controller/PontuacaoController.php");
require_once("../model/Espiao.php");
require_once("../model/Exercito.php");
require_once("../model/Guerrilha.php");


$controller = new PontuacaoController();

$guerrilha = new Guerrilha("100", "5", "8", "8");
$espiao = new Espiao("200", "10", "7", "10");
$exercito = new Exercito("50", "2", "7", "10");

print_r($controller->batalha($guerrilha));
print_r($controller->batalha($espiao));
print_r($controller->batalha($exercito));
