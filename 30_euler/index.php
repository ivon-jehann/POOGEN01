<?php

// composer require phpunit/php-timer
// composer require symfony/var-dumper

/*
 * ici on se propose de chercher la somme des multiple de 3 ou de 5 en partant de 0 jusqu'à $n
 * avec un algorythme performant
 */

use SebastianBergmann\Timer\Timer;

require_once '../vendor/autoload.php';

//démarrage d'un timer
$timer = new Timer();
$timer->start();

$n = 10**8;
$s = 0;


// premier algo
/*for ($i=0; $i<$n; $i++){
    if ($i%3 === 0 || $i%5 === 0) {
        $s+=$i;
    }
}*/

// deuxième algo un peu plus performant
for ($i=3; $i<$n; $i+=3) {
    $s+=$i;
}
for ($j=5; $j<$n; $j+=5) {
    if ($j%3!==0) $s+=$j;
}

dump($s);

// arrêt du timer et récupération de la durée
$duration = $timer->stop();
dump($duration);

// 2333333316666668
// 2333333316666668