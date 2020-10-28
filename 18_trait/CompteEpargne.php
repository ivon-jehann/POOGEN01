<?php

namespace Traits;

class CompteEpargne extends CompteB
{

    /*
     * utilisation d'un trait, ceci importe les méthodes du trait dans la classe
     *
     * si on utilise plusieurs traits et qu'il y a des collision de méthodes, on peut les
     * gérer au cas par cas
     */
    use CodeGenerator, CodeGenerator2021 {
        CodeGenerator2021::generateCode insteadof CodeGenerator;
    }

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

    public function __toString(): string {
        return "Compte épargne de code " . $this->generateCode();
    }

}