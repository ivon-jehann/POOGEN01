<?php


class CompteEpargne extends CompteB
{
    protected $tauxInterets;

    public function __construct(int $numero, float $tauxInterets) {
        parent::__construct($numero);
        $this->tauxInterets = $tauxInterets;
    }

    public function interets(): CompteEpargne {
        $this->solde += $this->solde * $this->tauxInterets / 100;

        return $this;
    }

    /*
     * surcharge de depot
     */
    public function depot($montant) {
        parent::depot($montant);
        $this->solde += 5;
    }

}