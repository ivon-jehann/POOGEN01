<?php


abstract class Forme
{
    protected $id;
    protected $centre;
    protected static $compteur = 0;

    public function __construct(Point2D $centre) {
        $this->centre = $centre;
        $this->id = ++self::$compteur;
    }

    abstract public function surface(): float;

    abstract public function perimetre(): float;

    public function bouger(float $dx, float $dy) {
        $this->centre->bouger($dx, $dy);
    }

}