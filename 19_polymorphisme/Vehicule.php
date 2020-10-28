<?php
namespace Polymorphisme;

class Vehicule
{
    protected $dateConstruction;

    public function __construct(\DateTimeInterface $dateConstruction) {
        $this->dateConstruction = $dateConstruction;
    }
}