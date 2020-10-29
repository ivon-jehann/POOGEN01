<?php


namespace Film;


class FilmModel
{
    protected $mysqli;

    public function __construct() {
        $this->mysqli = new \mysqli(
            'localhost',
            'ivon',
            'password',
            'mediatheque_02'
        );
    }

    public function list() {
        $sql = "SELECT * FROM film";
        $result = $this->mysqli->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

}