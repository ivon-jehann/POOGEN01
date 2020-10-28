<?php


namespace Usine;


abstract class Employe
{
    protected $nom;
    protected $prenom;
    protected $age;
    protected $dateEntreeService;

    public function __construct(
        string $nom,
        string $prenom,
        int $age,
        \DateTimeInterface $dateEntreeService)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->dateEntreeService = $dateEntreeService;
    }

    abstract public function calculerSalaire(): float;

    public function getNom(): string {
        return "L'employé $this->prenom $this->nom";
    }
}