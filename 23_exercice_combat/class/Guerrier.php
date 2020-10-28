<?php


namespace Combat;


class Guerrier extends Personnage
{
    public function __construct(
        string $nom,
        int $vie = 1500,
        int $attaque = 88,
        int $defense = 31
    ) {
        $this->nom = $nom;
        $this->vie = $vie;
        $this->attaque = $attaque;
        $this->defense = $defense;
        $this->arme = new Arme('Hache', 45);
        $this->armure = new Armure('Cote de Maille', 10);
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

        echo "Braaaaaaaaa ...<br>";

        return $this;
    }
}