<?php


namespace Combat;


class Magicien extends Personnage
{

    public function __construct(
        string $nom,
        int $vie = 1212,
        int $attaque = 125,
        int $defense = 26
    ) {
        $this->nom = $nom;
        $this->vie = $vie;
        $this->attaque = $attaque;
        $this->defense = $defense;
        $this->arme = new Arme('Baguette', 30);
        $this->armure = new Armure('Tunique', 20);
    }

    public function attaquer(Personnage $personnage): Personnage
    {
        $personnage->setVie(
            $personnage->getVie()
            - $this->attaque
            - $this->arme->getBonusAttaque()
            + $personnage->getDefense()
            + $personnage->getArmure()->getBonusDefense()
        );

        echo "Abracadabra ...<br>";

        return $this;
    }
}