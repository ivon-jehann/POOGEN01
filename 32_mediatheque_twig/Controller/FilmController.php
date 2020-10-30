<?php

namespace Mediatheque02\Controller;

use Mediatheque02\Model\FilmModel;

class FilmController extends AbstractController
{

    protected $filmModel;

    public function __construct() {
        parent::__construct();
        $this->filmModel = new FilmModel();
    }

    public function list(): void {
        $films = $this->filmModel->list();
        require 'Vue/Film/liste.phtml';
    }

    public function last(): void {
        $last = $this->filmModel->last();
        require "Vue/Film/last.phtml";
    }

    // on pourrait avoir les actions classiques d'un CRUD (create read update delete)
    public function delete(): void {
        $id = $_GET['id'] ?? null;
        if (null !== $id) {
            $this->filmModel->delete($id);
        }
        header('Location: /32_mediatheque_twig/index.php?entity=Film&action=list');
    }

    public function add(): void {
        if (isset($_POST['add'])) {
            $titre = $_POST['titre'];
            $realisateur = $_POST['realisateur'];
            $anneeDeSortie = $_POST['anneeDeSortie'];
            $this->filmModel->add($titre, $realisateur, $anneeDeSortie);
            header('Location: /32_mediatheque_twig/index.php?entity=Film&action=list');
        }else{
            require 'Vue/Film/add.phtml';
        }
    }

}