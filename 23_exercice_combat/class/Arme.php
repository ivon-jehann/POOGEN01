<?php


namespace Combat;


class Arme
{
    protected $nom;

    protected $bonusAttaque;

    public function __construct(string $nom, int $bonusAttaque) {
        $this->nom = $nom;
        $this->bonusAttaque = $bonusAttaque;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return Arme
     */
    public function setNom(string $nom): Arme
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return int
     */
    public function getBonusAttaque(): int
    {
        return $this->bonusAttaque;
    }

    /**
     * @param int $bonusAttaque
     * @return Arme
     */
    public function setBonusAttaque(int $bonusAttaque): Arme
    {
        $this->bonusAttaque = $bonusAttaque;
        return $this;
    }



}