<?php
namespace Garage;

use Garage\Peugeot\Voiture;
use Garage\Renault\Voiture as V;

require 'Peugeot/Voiture.php';
require 'Renault/Voiture.php';

// utilisation du fqcn (full qualified class name)
$v1 = new Voiture();
echo $v1;
echo '<br>';

$v2 = new V();
echo $v2;

//namespace global \ va servir notement lorsque l'on
// est dans un namespace a utiliser les classe natives de php
$aujourdhui = new \DateTime();