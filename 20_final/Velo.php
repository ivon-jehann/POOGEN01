<?php


namespace BlocageHeritage;

// pour bloquer l'héritage de la classe entière je peux utiliser le mot clé final
//devant la déclaration de la class
//final class Velo
class Velo
{
    protected $couleur;
    protected $nbVitesses;
    protected $marque;

    public function __construct(string $couleur, int $nbVitesses, string $marque)
    {
        $this->couleur = $couleur;
        $this->nbVitesses = $nbVitesses;
        $this->marque = $marque;
    }

    // pour empecher la surcharge de la méthode dans les classe filles issue de Velo
    final public function avancer(int $distance): Velo
    {
        echo "On a fait $distance km.";
        return $this;
    }
}