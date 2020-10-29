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
}