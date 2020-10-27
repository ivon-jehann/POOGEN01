<?php

require 'Enseignant.php';
require 'Departement.php';

$d = new Agregation\Departement('informatique');

$e = new \Agregation\Enseignant('Martin', 'Géraldine', $d);

echo $e;
echo '<br>';

unset($d);
echo $e;
echo '<br>';

$e->setDepartement(null);
echo $e;