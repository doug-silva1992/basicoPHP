<?php

function __autoload($nomeClasse){
    require_once("$nomeClasse.php");
}

$carro = new DelRay();

var_dump($carro);