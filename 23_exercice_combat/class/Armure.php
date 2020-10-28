<?php


namespace Combat;


class Armure
{
    protected $nom;

    protected $bonusDefense;

    public function __construct(string $nom, int $bonusDefense) {
        $this->nom = $nom;
        $this->bonusDefense = $bonusDefense;
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
     * @return Armure
     */
    public function setNom(string $nom): Armure
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return int
     */
    public function getBonusDefense(): int
    {
        return $this->bonusDefense;
    }

    /**
     * @param int $bonusDefense
     * @return Armure
     */
    public function setBonusDefense(int $bonusDefense): Armure
    {
        $this->bonusDefense = $bonusDefense;
        return $this;
    }


}