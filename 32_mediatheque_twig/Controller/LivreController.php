<?php


namespace Mediatheque02\Controller;


use Mediatheque02\Model\LivreModel;

class LivreController
{
    protected $livreModel;

    public function __construct() {
        $this->livreModel = new LivreModel();
    }

    public function list(): void {
        $livres = $this->livreModel->list();
        require 'Vue/Livre/liste.phtml';
    }

    public function last(): void {
        $last = $this->livreModel->last();
        require "Vue/Livre/last.phtml";
    }

    // on pourrait avoir les actions classiques d'un CRUD (create read update delete)
    public function delete(): void {
        $id = $_GET['id'] ?? null;
        if (null !== $id) {
            $this->livreModel->delete($id);
        }
        header('Location: /32_mediatheque_twig/index.php?entity=Livre&action=list');
    }

    public function add(): void {
        if (isset($_POST['add'])) {
            $titre = $_POST['titre'];
            $auteur = $_POST['auteur'];
            $anneeDeSortie = $_POST['anneeDeSortie'];
            $this->livreModel->add($titre, $auteur, $anneeDeSortie);
            header('Location: /32_mediatheque_twig/index.php?entity=Livre&action=list');
        }else{
            require 'Vue/Livre/add.phtml';
        }
    }
}