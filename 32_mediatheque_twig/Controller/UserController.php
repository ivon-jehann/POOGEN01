<?php


namespace Mediatheque02\Controller;


use Mediatheque02\Model\UserModel;

class UserController extends AbstractController
{
    protected $userModel;

    public function __construct() {
        parent::__construct();
        $this->userModel = new UserModel();
    }

    public function signin() {
        if (isset($_POST['signin'])) {
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $this->userModel->signin($prenom, $nom, $login,$password);
            header('Location: /32_mediatheque_twig/index.php?entity=User&action=connexion');
        }else{
            echo $this->twig->render('User/signin.html.twig');
        }
    }

    public function connexion() {
        if (isset($_POST['connexion'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];
            if ($this->userModel->verify($login, $password)) {
                $_SESSION['connected'] = $login;
                header('Location: /32_mediatheque_twig/index.php');
            }else{
                echo $this->twig->render('User/connexion.html.twig');
            }
        }else{
            echo $this->twig->render('User/connexion.html.twig');
        }
    }

}