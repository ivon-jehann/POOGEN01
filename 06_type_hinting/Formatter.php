<?php


class Formatter
{

    public int $state;

    public function formatText(? string $sentence): void {
        if (null !== $sentence) {
            echo ucfirst(strtolower($sentence));
        }else{
            echo 'Valeur null';
        }
    }

    /*
     * int
     * float
     * string
     * array
     * bool
     *
     * objets
     *
     * type de retour void possible (si il n'y a pas de retour
     */

    /*
     * un type peut également avoir la possibilité d'être null
     * on va l'indiqué avec le ?
     */
}