<?php

namespace Encapsulation;

class Velo
{
    protected $modele;
    protected $prix;

    public function getModele(): string {
        return strtolower($this->modele);
    }

    public function setModele(string $modele): void {
        $this->modele = $modele;
    }

    public function getPrix(): int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): void
    {
        $this->prix = abs($prix);
    }
}