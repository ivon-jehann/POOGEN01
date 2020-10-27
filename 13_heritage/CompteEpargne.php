<?php

/*
 * classe fille, Le compte epargne est un compte bancaire spécialisé
 * Une classe ne peut hériter que d'une seule classe mère
 * une classe mère peut avoir plusieurs classes filles
 *
 */
class CompteEpargne extends CompteB
{
    protected $tauxInterets;

    public function __construct(int $numero, float $tauxInterets) {
        // appel au constructeur parent (constructeur de CompteB)
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
        // méthode depot de CompteB
        parent::depot($montant);
        $this->solde += 5;
    }

}