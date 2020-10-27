<?php
namespace Garage_02\Renault;

class Voiture
{
    public $modele;
    public $prix;
    public $lieuDeConstruction;

    public function __toString() {
        return "Votre voiture est une Renault.";
    }
}