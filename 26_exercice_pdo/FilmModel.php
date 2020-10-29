<?php


namespace FilmPDO;


class FilmModel
{
    protected $pdo;

    public function __construct() {
        $this->pdo = new \PDO(
            'mysql:host=localhost;dbname=mediatheque_02',
            'ivon',
            'password'
        );
    }

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
}

