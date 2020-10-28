<?php


namespace Usine;


abstract class Commercial extends Employe
{
    protected $chiffreAffaire;

    public function __construct(
        string $nom,
        string $prenom,
        int $age,
        \DateTimeInterface $dateEntreeService,
        float $chiffreAffaire
    )
    {
        parent::__construct($nom, $prenom, $age, $dateEntreeService);
        $this->chiffreAffaire = $chiffreAffaire;
    }
}