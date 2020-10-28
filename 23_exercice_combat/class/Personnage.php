<?php

namespace Combat;

abstract class Personnage
{
    protected $nom;
    protected $vie;
    protected $attaque;
    protected $defense;
    protected $arme;
    protected $armure;

    abstract public function attaquer(Personnage $personnage): Personnage;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     * @return Personnage
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVie()
    {
        return $this->vie;
    }

    /**
     * @param mixed $vie
     * @return Personnage
     */
    public function setVie($vie)
    {
        $this->vie = $vie;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * @param mixed $attaque
     * @return Personnage
     */
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * @param mixed $defense
     * @return Personnage
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getArme()
    {
        return $this->arme;
    }

    /**
     * @param mixed $arme
     * @return Personnage
     */
    public function setArme($arme)
    {
        $this->arme = $arme;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getArmure()
    {
        return $this->armure;
    }

    /**
     * @param mixed $armure
     * @return Personnage
     */
    public function setArmure($armure)
    {
        $this->armure = $armure;
        return $this;
    }



}