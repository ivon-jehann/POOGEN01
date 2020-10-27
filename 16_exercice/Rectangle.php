<?php


class Rectangle extends Forme
{
    protected $largeur;
    protected $longueur;

    public function __construct(Point2D $centre, float $largeur, float $longueur) {
        parent::__construct($centre);
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }

    public function surface(): float {
        return $this->largeur*$this->longueur;
    }

    public function perimetre(): float {
        return 2 * ($this->largeur + $this->longueur);
    }

    public function __toString(): string {
        return "{Rectangle: $this->id<br>"
            . "Centre: $this->centre<br>"
            ."Largeur: $this->largeur<br>"
            ."Longueur: $this->longueur<br>"
            ."surface: " . $this->surface() . "<br>"
            ."perimetre: ".$this->perimetre() . "<br>"
            ."}";
    }

    /**
     * @return mixed
     */
    public function getLargeur(): float
    {
        return $this->largeur;
    }

    /**
     * @param mixed $largeur
     * @return Rectangle
     */
    public function setLargeur(float $largeur): Rectangle
    {
        $this->largeur = $largeur;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongueur(): float
    {
        return $this->longueur;
    }

    /**
     * @param mixed $longueur
     * @return Rectangle
     */
    public function setLongueur(float $longueur): Rectangle
    {
        $this->longueur = $longueur;
        return $this;
    }



}