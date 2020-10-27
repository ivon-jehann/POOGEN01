<?php
session_start();
require 'Ecran.php';

$ecran1 = unserialize($_SESSION['ecran']);

echo '<pre>';
var_dump($ecran1);
echo '</pre>';