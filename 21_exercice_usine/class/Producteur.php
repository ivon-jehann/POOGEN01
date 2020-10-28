<?php


namespace Usine;


class Producteur extends Employe
{

    protected $nombreUnites;

    public function __construct(
        string $nom,
        string $prenom,
        int $age,
        \DateTimeInterface $dateEntreeService,
        int $nombreUnites
    )
    {
        parent::__construct($nom, $prenom, $age, $dateEntreeService);
        $this->nombreUnites = $nombreUnites;
    }

    public function calculerSalaire(): float
    {
        return $this->nombreUnites * 5;
    }

    public function getNom(): string
    {
        return "Le producteur $this->prenom $this->nom";
    }
}