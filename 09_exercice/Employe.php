<?php


class Employe
{
    protected string $matricule;
    protected string $nom;
    protected string $prenom;
    protected string $dateNaissance;
    protected string $dateEmbauche;
    protected float $salaire;

    public function __construct(
        string $matricule,
        string $nom,
        string $prenom,
        string $dateNaissance,
        string $dateEmbauche,
        float $salaire
    ){
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->dateNaissance = $dateNaissance;
        $this->salaire = $salaire;
    }

    public function age(): int {
        $dn = \DateTime::createFromFormat('Y-m-d', $this->dateNaissance);
        /** @var DateInterval $diff */
        $diff = $dn->diff(new \DateTime());
        return $diff->y;
    }

    public function anciennete(): int {
        $dn = \DateTime::createFromFormat('Y-m-d', $this->dateEmbauche);
        $diff = $dn->diff(new \DateTime());
        return $diff->y;
    }

    public function augmentation(): Employe {
        if ($this->anciennete() < 5) {
            $this->salaire += 2*$this->salaire/100;
        }elseif($this->anciennete() < 10) {
            $this->salaire += 5*$this->salaire/100;
        }else{
            $this->salaire += 10*$this->salaire/100;
        }

        return $this;
    }

    public function __toString(): string {
        $r = "Matricule: " . $this->getMatricule() . "<br>";
        $r.= "Nom complet: " . $this->getNom() . " " . $this->getPrenom() . '<br>';
        $r.= "Age: " . $this->age() . '<br>';
        $r.= "Ancienneté: ". $this->anciennete() . '<br>';
        $r.= "Salaire: " . $this->getSalaire() . '<br>';
        return $r;
    }

    public function getMatricule(): string
    {
        return $this->matricule;
    }

    public function getNom(): string
    {
        return strtoupper($this->nom);
    }

    public function getPrenom(): string
    {
        return ucfirst(strtolower($this->prenom));
    }

    public function getDateNaissance(): string
    {
        return $this->dateNaissance;
    }

    public function getDateEmbauche(): string
    {
        return $this->dateEmbauche;
    }

    public function getSalaire(): float
    {
        return $this->salaire;
    }

    /**
     * @param string $matricule
     * @return Employe
     */
    public function setMatricule(string $matricule): Employe
    {
        $this->matricule = $matricule;
        return $this;
    }

    /**
     * @param string $nom
     * @return Employe
     */
    public function setNom(string $nom): Employe
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @param string $prenom
     * @return Employe
     */
    public function setPrenom(string $prenom): Employe
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * @param string $dateNaissance
     * @return Employe
     */
    public function setDateNaissance(string $dateNaissance): Employe
    {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * @param string $dateEmbauche
     * @return Employe
     */
    public function setDateEmbauche(string $dateEmbauche): Employe
    {
        $this->dateEmbauche = $dateEmbauche;
        return $this;
    }

    /**
     * @param float $salaire
     * @return Employe
     */
    public function setSalaire(float $salaire): Employe
    {
        $this->salaire = $salaire;
        return $this;
    }




}