<?php


namespace Usine;


class Representant extends Commercial
{

    public function calculerSalaire(): float
    {
        return (20 * $this->chiffreAffaire / 100) + 800;
    }

    public function getNom(): string
    {
        return "Le représentant $this->prenom $this->nom";
    }
}