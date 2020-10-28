<?php
function simpleAutoload($class) {
    $el = explode('\\', $class);
    include end($el).".php";
}

spl_autoload_register('simpleAutoload');

$ve = new \BlocageHeritage\VeloElectrique('rouge', 21, 'MBK');
$ve->avancer(10);