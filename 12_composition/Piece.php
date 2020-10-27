<?php


namespace Composition;


class Piece
{
    protected $nom;
    protected $surface;

    public function __construct(string $nom, float $surface) {
        $this->nom = $nom;
        $this->surface = $surface;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getSurface(): float {
        return $this->surface;
    }
}