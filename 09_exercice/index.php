<?php
require 'Employe.php';

$e1 = new Employe(
    '10941',
    'SALiM',
    'omar',
    '1990-08-04',
    '2012-11-05',
    10000
);

echo $e1;
$e1->augmentation();
echo $e1;

// chainage des méthodes
$e1->setMatricule('UIOP')->setNom('Magon')->augmentation()->setPrenom('Ivon');

echo $e1;