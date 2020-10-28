<?php
namespace Traits;

class CompteB
{
    public $numero;
    public $solde = 0;

    public function __construct($numero) {
        $this->numero = $numero;
    }

    public function retrait($montant) {
        $this->solde -= $montant;
    }

    public function depot($montant) {
        $this->solde += $montant;
    }
}