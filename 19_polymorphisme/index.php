<?php

function simpleAutoload($class) {
    $el = explode('\\', $class);
    include end($el).".php";
}

spl_autoload_register('simpleAutoload');

/*
 * Je peux grace au polymorphisme passer des objet de type Vehicule, Moto, Voiture ou tout autre
 * objet qui hérite de Vehicule;
 *
 * On peut faire la même chose avec une interface: si on a typé notre paramètre de
 * méthode avec une interface alors on pourra lui passer en paramètre tout objet
 * implémentant cette interface.
 */
$garage = new \Polymorphisme\Garage();
$garage
    ->addVehicule(new \Polymorphisme\Voiture(new DateTime()))
    ->addVehicule(new \Polymorphisme\Moto(new DateTimeImmutable()))
    ->addVehicule(new \Polymorphisme\Vehicule(new DateTime()));

echo '<pre>';
var_dump($garage);
echo '</pre>';

