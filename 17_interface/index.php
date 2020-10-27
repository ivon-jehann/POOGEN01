<?php
function simpleAutoload($class) {
    include "$class.php";
}

spl_autoload_register('simpleAutoload');

$c = new Chaise('IKEA 46');
$c->plier();
echo '<br>';
$c->deplier();
echo '<br>';
$c->laver();