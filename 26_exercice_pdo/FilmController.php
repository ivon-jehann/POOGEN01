<?php

namespace FilmPDO;

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
    public function delete(): void {
        $id = $_GET['id'] ?? null;
        if (null !== $id) {
            $this->filmModel->delete($id);
        }
        header('Location: /26_exercice_pdo/index.php?action=list');
    }

    public function add(): void {
        if (isset($_POST['add'])) {
            $titre = $_POST['titre'];
            $realisateur = $_POST['realisateur'];
            $anneeDeSortie = $_POST['anneeDeSortie'];
            $this->filmModel->add($titre, $realisateur, $anneeDeSortie);
            header('Location: /26_exercice_pdo/index.php?action=list');
        }else{
            require 'Vue/add.phtml';
        }
    }

}