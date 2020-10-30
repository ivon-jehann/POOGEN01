<?php


namespace Mediatheque02\Model;


class UserModel extends AbstractModel
{
    public function signin(string $prenom, string $nom, string $login, string $password): int {
        $sql = "INSERT INTO user (prenom, nom, login, password) VALUES (:prenom, :nom, :login, :password)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':prenom', $prenom);
        $stmt->bindValue(':nom', $nom);
        $stmt->bindValue(':login', $login);
        $stmt->bindValue(':password', $password);
        $stmt->execute();

        return $stmt->rowCount();
    }

    public function verify(string $login, string $password): bool {
        $sql = "SELECT * FROM user WHERE login = :login AND password = :password";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':login', $login);
        $stmt->bindValue(':password', $password);
        $stmt->execute();
        //dump($password);
        //dump($stmt->fetch(\PDO::FETCH_ASSOC));exit;

        return $stmt->rowcount() === 1;
    }


}