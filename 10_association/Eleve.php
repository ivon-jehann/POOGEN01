<?php


namespace Association;


class Eleve
{
    protected $nom;
    protected $prenom;
    protected $classe;

    public function __construct(string $nom, string $prenom, string $classe) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->classe = $classe;
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
     * @return Eleve
     */
    public function setNom(string $nom): Eleve
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
     * @return Eleve
     */
    public function setPrenom(string $prenom): Eleve
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * @return string
     */
    public function getClasse(): string
    {
        return $this->classe;
    }

    /**
     * @param string $classe
     * @return Eleve
     */
    public function setClasse(string $classe): Eleve
    {
        $this->classe = $classe;
        return $this;
    }


}