<?php

/*
 * pour préciser que la classe chaise implémente l'interface Pliable on utilise le mot cle implements
 * une classe pourra implémenter plusieurs interfaces et éventuellement hériter d'une autre classe
 * en même temps
 */
class Chaise implements Pliable, Lavable
{
    protected $modele;

    public function __construct(string $modele) {
        $this->modele = $modele;
    }

    public function plier(): void {
        echo "La chaise $this->modele est maintenant pliée.";
    }

    public function deplier(): void {
        echo "La chaise est dépliée.";
    }

    public function laver(): void {
        echo "La chaise est propre.";
    }
}