<?php


namespace Mediatheque02\Model;


abstract class AbstractModel
{
    protected $pdo;

    public function __construct() {
        try {
            $this->pdo = new \PDO(
                'mysql:host=localhost;dbname=mediatheque_02',
                'ivon',
                'password'
            );
        }catch(\Exception $e) {
            echo "La connexion a échouée".'<br>';
            echo $e->getMessage();
        }
    }
}