<?php
require 'CLient.php';

$c1 = new Client('Jean Dupond');
$c1->setEmail('eeeeeeee');
$c1->setEmail('dupond@example.com');
$c1->setPassword('azaz');
$c1->setPassword('AZERTYU');

echo $c1->getNom();
echo '<br>';
echo $c1->getEmail();
echo '<br>';
echo $c1->getPassword();