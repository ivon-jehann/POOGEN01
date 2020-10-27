<?php


class Carre extends Rectangle
{
    public function __construct(Point2D $centre, float $cote) {
        parent::__construct($centre, $cote, $cote);
    }

    public function __toString(): string {
        return "{Carre: $this->id<br>"
            ."Centre: $this->centre<br>"
            ."Coté: $this->largeur<br>"
            ."surface: " . $this->surface() . "<br>"
            ."perimetre: ".$this->perimetre() . "<br>"
            ."}";
    }
}