<?php

require 'Complexe.php';

$c1 = new Complexe(3,1);
echo $c1;
echo '<br>';

$c2 = new Complexe(1, 2);
echo $c2;
echo '<br>';

echo $c1->ajouter($c2);
echo '<br>';

echo $c1->soustraction($c2);
echo '<br>';

echo $c1->produit($c2);
echo '<br>';

echo $c1->division($c2);

