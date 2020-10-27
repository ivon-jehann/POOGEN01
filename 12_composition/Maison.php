<?php


namespace Composition;


class Maison
{
    protected $adresse;
    protected $pieces = [];

    public function __construct(string $adresse, Piece ...$pieces) {
        $this->adresse = $adresse;
        $this->pieces = $pieces;
    }

    public function surface(): float {
        $surface = 0;
        foreach($this->pieces as $piece) {
            $surface += $piece->getSurface();
        }
        return $surface;
    }

    public function __toString(): string {
        return "Cette maison fait "
            . $this->surface()
            . "m2 et possède "
            . count($this->pieces)
            . ' pièces.';
    }

}