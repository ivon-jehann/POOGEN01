<?php

// composer require phpunit/php-timer
// composer require symfony/var-dumper

use SebastianBergmann\Timer\Timer;

require_once '../vendor/autoload.php';

$timer = new Timer();
$timer->start();

$n = 10**8;
$s = 0;

/*for ($i=0; $i<$n; $i++){
    if ($i%3 === 0 || $i%5 === 0) {
        $s+=$i;
    }
}*/

for ($i=3; $i<$n; $i+=3) {
    $s+=$i;
}
for ($j=5; $j<$n; $j+=5) {
    if ($j%3!==0) $s+=$j;
}

dump($s);

$duration = $timer->stop();
dump($duration);

// 2333333316666668
// 2333333316666668