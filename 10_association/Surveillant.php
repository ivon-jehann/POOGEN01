<?php


namespace Association;


class Surveillant
{
    protected $nom;
    protected $prenom;

    public function __construct(string $nom, string $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function coller(Eleve $eleve): void {
        echo "Le surveillant $this->prenom $this->nom a collé l'élève " .
            $eleve->getPrenom() . " " . $eleve->getNom() . " de la classe " .
            $eleve->getClasse();
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return Surveillant
     */
    public function setNom(string $nom): Surveillant
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     * @return Surveillant
     */
    public function setPrenom(string $prenom): Surveillant
    {
        $this->prenom = $prenom;
        return $this;
    }


}