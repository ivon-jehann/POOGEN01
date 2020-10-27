<?php


class Livre extends SupportCours
{
    protected $isbn;

    public function __construct(string $titre, string $auteur, int $isbn) {
        parent::__construct($titre, $auteur);
        $this->isbn = $isbn;
    }

    public function imprimer(): void {
        echo "Ce livre a pour titre $this->titre "
        . "et a été écrit par $this->auteur ; l'isbn est $this->isbn";
    }
}