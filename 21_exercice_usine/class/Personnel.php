<?php


namespace Usine;


class Personnel
{
    protected $employes = [];

    public function ajouterEmploye(Employe $employe): Personnel {
        $this->employes[] = $employe;
        return $this;
    }

    /**
     * Affiche le salaire de tous les employés
     */
    public function calculerSalaires(): Personnel {
        /** @var Employe $employe */
        foreach($this->employes as $employe) {
            echo $employe->getNom() . " son salaire est de: " . $employe->calculerSalaire() . '<br>';
        }
        return $this;
    }

    public function salaireMoyen(): Personnel {
        $sum = 0;
        /** @var Employe $employe */
        foreach ($this->employes as $employe) {
            $sum += $employe->calculerSalaire();
        }
        $moy = $sum/count($this->employes);
        echo "Le salaire moyen est de $moy<br>";

        return $this;
    }
}