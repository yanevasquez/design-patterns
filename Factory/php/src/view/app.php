<?php

require_once("../model/SaudacaoFactory.php");

$pessoa1 = SaudacaoFactory::getUser('You', '');

$pessoa2 = SaudacaoFactory::getUser('Yane', 'feminino');

$pessoa3 = SaudacaoFactory::getUser('Yan', 'masculino');

print_r($pessoa1->getSaudacao()); 
print_r($pessoa2->getSaudacao()); 
print_r($pessoa3->getSaudacao()); 