<?php
require 'Velo.php';

$velo = new Encapsulation\Velo();
$velo->setModele('MBK 24');
$velo->setPrix(-1000);

echo $velo->getModele();
echo '<br>';
echo $velo->getPrix();

//filter_var($email,FILTER_VALIDATE_EMAIL);