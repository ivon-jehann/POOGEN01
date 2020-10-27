<?php
session_start();
require 'Ecran.php';

// instanciation d'un objet avec le mot clé new
$ecran1 = new Ecran('Apple 32', 500);
$aliasEcran1 = $ecran1;

// assignation d'une valeur à un attribut public
$ecran1->modele = "Dell 23";
//$ecran1->prix = 100;

// accès à un attribut public
echo $ecran1->modele;
echo '<br>';

// accès à un attribut de class
echo Ecran::$nbTotalEcrans;
echo '<br>';

// accès à une constante de classe
echo Ecran::FORME;

// utilisation d'une méthode d'instance
$ecran1->allumerEteindre();
echo '<br>';

// appel à la méthode static raz
//Ecran::raz();
echo Ecran::$nbTotalEcrans;
echo '<br>';

echo '<pre>';
var_dump($ecran1);
echo '</pre>';

//unset($ecran1);
unset($aliasEcran1);

echo '<br>';
echo Ecran::$nbTotalEcrans;

echo '<br>';
echo 'Une phrase très intéressante.';
echo '<br>';

$ecran1->marque = 12;
echo '<br>';

$serializedEcran1 = serialize($ecran1);
$_SESSION['ecran'] = $serializedEcran1;

echo $serializedEcran1;
echo '<br>';

echo $ecran1;
echo '<br>';