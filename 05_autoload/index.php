<?php

function simpleAutoload($fqcn) {
    $path = "class/$fqcn" . ".php";
    if (file_exists($path)) {
        include_once($path);
    }
}

function monAutoload($fqcn){
    $a = explode('\\', $fqcn);
    $path = implode('/', $a);
    if (file_exists($path.'.php')){
        include_once($path . '.php');
    }
}

spl_autoload_register('simpleAutoload');
spl_autoload_register('monAutoload');

$moto = new Moto();
echo $moto;

echo '<br>';
echo new Trotinette();
echo '<br>';

$renault = new Garage_02\Renault\Voiture();
echo $renault;