<?php
require 'NegativeValueException.php';
require 'CompteB.php';

try {
    $cb = new \ExempleException\CompteB(123);
    $cb->depot(-100);
}catch(Exception $e) {
    echo $e->getMessage() . '<br>';
}finally{
    echo "fin du script";
}