<?php


namespace Usine;


class Manutentionnaire extends Employe
{

    protected $nombreHeures;

    public function __construct(
        string $nom,
        string $prenom,
        int $age,
        \DateTimeInterface $dateEntreeService,
        int $nombreHeures
    )
    {
        parent::__construct($nom, $prenom, $age, $dateEntreeService);
        $this->nombreHeures = $nombreHeures;
    }

    public function calculerSalaire(): float
    {
        return $this->nombreHeures * 65;
    }

    public function getNom(): string
    {
        return "Le manutentionnaire $this->prenom $this->nom";
    }
}