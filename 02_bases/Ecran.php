<?php


/*
 * convention :
 * Nom de la classe sera par convention en PascalCase
 * Le nom du fichier sera le même que le nom de la class + extension .php
 */
class Ecran {

    /* attributs : camelCase en général
     * visibilité(public, protected, private) + mot clé static ou pas (si l'attribut est lié à la classe ou
     * à l'objet) + nom de l'attribut
     *
    */
    public $modele;
    public $prix;
    public $estAllume = false;
    public static $nbTotalEcrans = 0;
    //constantes: mot clé const + nom (convention Majuscules, séparateur _)
    const FORME = 'rectangle';

    /*
     * méthodes : visibilité + mot clé static ou pas + mot clé function + parametres + instructions
     */
    public function allumerEteindre() {
        // pour accéder aux attribut depuis la classe on va utiliser le mot clé $this
        $this->estAllume = !$this->estAllume;
        echo self::FORME;
    }

    public static function raz() {
        self::$nbTotalEcrans = 0;
    }

    public function __construct($modele, $prix) {
        $this->modele = $modele;
        $this->prix = $prix;
        self::$nbTotalEcrans++;
    }

    public function __destruct() {
        echo "mon ecran " . $this->modele . 'a été détruit.';
        self::$nbTotalEcrans--;
    }

    public function __get($name) {
        echo "Mon attribut $name n'existe pas ou est innaccessible";
    }

    public function __set($name, $value) {
        echo "Mon attribut $name n'esxiste pas, on ne peut lui assigner la valeur $value";
    }

    public function __sleep() {
        return ['modele', 'prix'];
    }

    public function __toString() {
        return "Cet ecran est un modele " . $this->modele . ".";
    }

}