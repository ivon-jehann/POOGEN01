<?php


namespace Usine;


class ManutentionnaireRisque extends Manutentionnaire implements Risque
{
    public function calculerSalaire(): float
    {
        return parent::calculerSalaire() + self::PRIME;
    }

    public function getNom(): string
    {
        return "Le manutentionnaire en milieu risqué $this->prenom $this->nom";
    }
}