<?php

require 'Eleve.php';
require 'Surveillant.php';

$e1 = new \Association\Eleve('Dupond', 'Georges', 'Terminale 2');

$s1 = new \Association\Surveillant('Nadal', 'Joe');

$s1->coller($e1);