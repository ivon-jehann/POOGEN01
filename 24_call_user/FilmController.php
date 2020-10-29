<?php

namespace Film;

class FilmController
{

    protected $filmModel;

    public function __construct() {
        $this->filmModel = new FilmModel();
    }

    public function list(): void {
        $films = $this->filmModel->list();
        require 'Vue/liste.phtml';
    }

    public function last(): void {
        $last = $this->filmModel->last();
        require "Vue/last.phtml";
    }

    // on pourrait avoir les actions classiques d'un CRUD (create read update delete)
}