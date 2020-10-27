<?php


namespace Agregation;


class Enseignant
{
    protected $nom;
    protected $prenom;
    protected $departement;

    public function __construct(string $nom, string $prenom, ? Departement $departement) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->departement = $departement;
    }

    public function getDepartement(): ? Departement {
        return $this->departement;
    }

    public function setDepartement(? Departement $departement) : Enseignant {
        $this->departement = $departement;

        return $this;
    }

    public function __toString(): string {
        return
            is_null($this->departement)
                ? $this->prenom . " " . $this->nom . " n'est affecté a aucun département."
                : $this->prenom . ' ' . $this->nom . " est affecté au département "
                    . $this->departement->getNom();
    }
}