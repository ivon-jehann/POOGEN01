<?php


class Cercle extends Forme
{
    protected $rayon;

    public function __construct(Point2D $centre, float $rayon) {
        parent::__construct($centre);
        $this->rayon = $rayon;
    }

    public function surface(): float {
        return pi()*$this->rayon**2;
    }

    public function perimetre(): float {
        return 2 * pi() * $this->rayon;
    }

    public function __toString(): string {
        return "{Cercle: $this->id<br>"
            ."Centre: $this->centre<br>"
            ."Rayon: $this->rayon<br>"
            ."surface: " . $this->surface() . "<br>"
            ."perimetre: ".$this->perimetre() . "<br>"
            ."}";
    }

    /**
     * @return mixed
     */
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * @param mixed $rayon
     * @return Cercle
     */
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;
        return $this;
    }


}