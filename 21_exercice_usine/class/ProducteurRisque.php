<?php


namespace Usine;


class ProducteurRisque extends Producteur implements Risque
{
    public function calculerSalaire(): float
    {
        return parent::calculerSalaire() + self::PRIME;
    }

    public function getNom(): string
    {
        return "Le producteur en milieu risqué $this->prenom $this->nom";
    }
}