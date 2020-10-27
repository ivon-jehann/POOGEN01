<?php

/* classe abstraite avec le mot clé abstract */
abstract class SupportCours
{
    protected $titre;
    protected $auteur;

    /* on ne peut pas instancier la classe abstraite mais elle peut quand même avoir un
    constructeur qui sera accessible aux classes filles */
    public function __construct(string $titre, string $auteur) {
        $this->titre = $titre;
        $this->auteur = $auteur;
    }

    /* une méthode abstraite, elle n'est pas implémentée ici */
    public abstract function imprimer(): void;

    /* une méthode concrète implémentée ici */
    public function getAuteur(): string {
        return $this->auteur;
    }
}