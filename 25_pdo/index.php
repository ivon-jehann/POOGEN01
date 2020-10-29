<?php

$pdo = new PDO('mysql:host=localhost;dbname=test_02', 'ivon', 'password');
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "<pre>";
var_dump($pdo);
echo "</pre>";

$sql = "CREATE TABLE IF NOT EXISTS voiture(
   id INT NOT NULL AUTO_INCREMENT,
   marque VARCHAR(255) NOT NULL,
   modele VARCHAR(255) NOT NULL,
   PRIMARY KEY (id) 
)";

/*$sql = "INSERT INTO voiture(marque, modele) VALUES
    ('Peugeot', '205'), ('Renault', 'Clio'),('Renault', 'Mégane'),('Porsche', 'Cayman'), ('Citroen', '2CV')";
*/

$sql = "SELECT * FROM voiture";

// requête non préparée
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "Cette voiture est une " . $row['marque'] . " " . $row['modele'] . '<br>';
}

// on a également la possibilité avec PDO d'effectuer des requêtes préparées.
// - avec celles-ci, nous n'aurons plus besoins de protéger les données
// venant de l'utilisateur contre les injection SQL
// - sur certain types de requêtes notemment quand on va préparer une requete
// et l'executer plusieurs fois avec des parametres differents
// on aura des meilleurs performances.

var_dump($_GET);

$sql = "SELECT * FROM voiture WHERE id = :id AND marque = :marque";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_GET['id'] ?? 2);
$stmt->bindValue(':marque', $_GET['marque'] ?? 'Renault');
$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "La voiture est une " . $row['marque'] . " ".$row['modele'] . '<br>';
}

// autre manière avec des paramètres non nommés
$sql = "SELECT * FROM voiture WHERE marque = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_GET['marque'] ?? 'Renault']);

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "La voiture est une " . $row['marque'] . " ".$row['modele'] . '<br>';
}

/*
 * Attention au moteur de stockage utilisé lors de la création des tables :
 * préférer innodb plutôt que myisam, car il va pouvoir gérer les clés étrangères
 * et les transactions
 */

$pdo->beginTransaction();
$sql = "INSERT INTO voiture (marque, modele) VALUES ('Fiat', 'Panda')";
$pdo->query($sql);
//$pdo->rollback();
$pdo->commit();