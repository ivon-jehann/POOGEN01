<?php

$q = [10, 20, 30];
$d = [2, 3, 0];

foreach ($q as $quotient) {
    foreach ($d as $diviseur) {
        if ($diviseur === 0) {
            error_log("Erreur: division par zéro" . PHP_EOL, 3, 'error.log');
            trigger_error('div par 0', E_USER_ERROR);
        }
        else {
            echo "$quotient / $diviseur = " . ($quotient / $diviseur) . '<br>';
        }
    }
}