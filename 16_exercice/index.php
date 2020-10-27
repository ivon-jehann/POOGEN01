<?php

function simpleAutoload($class) {
    include "$class.php";
}

spl_autoload_register('simpleAutoload');

echo new Rectangle(new Point2D(2, 3), 1, 2);
echo '<br>';

echo $cercle = new Cercle(new Point2d(1, 2), 2);
echo '<br>';

$cercle->bouger(2, 1);
echo $cercle;

echo new Carre(new Point2D(3, 3), 1);