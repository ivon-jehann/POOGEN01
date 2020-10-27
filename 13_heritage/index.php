<?php

require '../03_cas_pratique/CompteB.php';
require 'CompteEpargne.php';

$cb = new CompteB(987654321);
$cb->depot(100);
$cb->retrait(10);
echo $cb->solde;

echo '<br>';

$ce = new CompteEpargne(123456789, 1.1);
echo $ce->numero;
echo '<br>';
$ce->depot(123);
$ce->retrait(12);
$ce->interets();

echo $ce->solde;