<?php
namespace Garage_02\Peugeot;

class Voiture
{
    public $modele;
    public $prix;
    public $lieuDeConstruction;

    public function __toString() {
        return "Votre voiture est une Peugeot.";
    }
}