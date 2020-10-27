<?php

require 'SupportCours.php';
require 'Livre.php';

$livre = new Livre('PHP avancé', 'P.Martin', 9782212);
echo $livre->getAuteur();
echo '<br>';
$livre->imprimer();