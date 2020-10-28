<?php


interface Pliable
{
    const CONSTANTE = 100;
    /*
     * l'interface ne contient que des méthodes abstraites et éventuellement des constantes
     * on n'utilise pas le mot cle abstract pour les méthodes, c'est implicite
     */
    public function plier(): void;
    public function deplier(): void;
}