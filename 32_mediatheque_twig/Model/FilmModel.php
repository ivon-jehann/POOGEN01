<?php


namespace Mediatheque02\Model;


class FilmModel extends AbstractModel
{
    public function list() {
        $sql = "SELECT * FROM film";
        $result = $this->pdo->query($sql);

        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function last() {
        $sql = "SELECT * FROM film ORDER BY anneeDeSortie DESC LIMIT 0,1";
        $result = $this->pdo->query($sql);

        return $result->fetch(\PDO::FETCH_ASSOC);
    }

    public function delete(int $id): int
    {
        $sql = "DELETE FROM film WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->rowCount();
    }

    public function add(string $titre, string $realisateur, int $anneeDeSortie): int {
        $sql = "INSERT INTO film (titre, realisateur, anneeDeSortie) 
                VALUES (:titre, :realisateur, :anneeDeSortie)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':titre', $titre);
        $stmt->bindValue(':realisateur', $realisateur);
        $stmt->bindValue(':anneeDeSortie', $anneeDeSortie);
        $stmt->execute();

        return $stmt->rowCount();
    }
}

