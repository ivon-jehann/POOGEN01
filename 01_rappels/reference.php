<?php

// en php une variable peut être soit une valeur, soit une reference

$valeur = 105;

// une référence va être un alias d'une variable, on va utiliser le symbol &
// pour passer une variable par référence

$reference = &$valeur;

// une copie sera une autre variable de type valeur
$copie = $valeur;

$valeur = 12;

echo $reference;
echo '<br>';
echo $copie;