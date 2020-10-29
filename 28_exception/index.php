<?php
require 'NegativeValueException.php';
require 'CompteB.php';

function additionner($a, $b) {
    if (!is_numeric($a) || !is_numeric($b)) {
        throw new InvalidArgumentException('Les deux paramètres doivent être des nombre');
    }

    return $a + $b;
}


try {
    $cb = new \ExempleException\CompteB(123);
    // $cb->depot(-100);
    echo additionner(1,'abc');

}catch(Exception $e) {
    echo $e->getMessage() . '<br>';
}finally{
    echo "fin du script";
}