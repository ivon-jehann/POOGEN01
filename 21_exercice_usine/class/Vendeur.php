<?php


namespace Usine;


class Vendeur extends Commercial
{
    public function calculerSalaire(): float
    {
        return (20 * $this->chiffreAffaire / 100) + 400;
    }

    public function getNom(): string
    {
        return "Le vendeur $this->prenom $this->nom";
    }
}