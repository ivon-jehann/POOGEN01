<?php


namespace Agregation;


class Departement
{
    protected $nom;

    public function __construct(string $nom) {
        $this->nom = $nom;
    }

    public function getNom(): string {
        return $this->nom;
    }
}