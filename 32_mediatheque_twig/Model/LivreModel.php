<?php


namespace Mediatheque02\Model;


class LivreModel extends AbstractModel
{

    public function list() {
        $sql = "SELECT * FROM livre";
        $result = $this->pdo->query($sql);

        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function last() {
        $sql = "SELECT * FROM livre ORDER BY anneeDeSortie DESC LIMIT 0,1";
        $result = $this->pdo->query($sql);

        return $result->fetch(\PDO::FETCH_ASSOC);
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM livre WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->rowCount();
    }

    public function add(string $titre, string $auteur, int $anneeDeSortie): int {
        $sql = "INSERT INTO livre (titre, auteur, anneeDeSortie) 
                VALUES (:titre, :auteur, :anneeDeSortie)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':titre', $titre);
        $stmt->bindValue(':auteur', $auteur);
        $stmt->bindValue(':anneeDeSortie', $anneeDeSortie);
        $stmt->execute();

        return $stmt->rowCount();
    }
}