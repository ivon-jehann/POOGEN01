<?php

require 'CodeGenerator.php';
require 'CodeGenerator2021.php';
require 'CompteB.php';
require 'CompteEpargne.php';

$ce = new \Traits\CompteEpargne(123, 1.1);
echo $ce;