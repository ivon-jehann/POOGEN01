<?php
namespace ExempleException;

class CompteB
{
    protected $numero;
    protected $solde = 0;

    public function __construct(int $numero) {
        $this->numero = $numero;
    }

    public function retrait(float $montant) {
        if ($montant < 0) {
            throw new \NegativeValueException("Le montant doit être positif");
        }
        $this->solde -= $montant;
    }

    public function depot(float $montant) {
        if ($montant < 0) {
            throw new \NegativeValueException("Le montant doit être positif");
        }
        $this->solde += $montant;
    }

    /**
     * @return int
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * @param int $numero
     * @return CompteB
     */
    public function setNumero(int $numero): CompteB
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return int
     */
    public function getSolde(): int
    {
        return $this->solde;
    }

    /**
     * @param int $solde
     * @return CompteB
     */
    public function setSolde(int $solde): CompteB
    {
        $this->solde = $solde;
        return $this;
    }


}