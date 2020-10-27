<?php

require 'CompteB.php';

$monCompte = new CompteB(123456789);

$monCompte->depot(1000);
$monCompte->retrait(333);
$monCompte->retrait(66);

echo $monCompte->solde;