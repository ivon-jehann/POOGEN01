<?php

function monAutoload($fqcn) {
    $elements = explode('\\', $fqcn);
    include_once 'class/' . end($elements).'.php';
}

spl_autoload_register('monAutoload');

$player1 = new \Combat\Magicien('Merlin');
$player2 = new \Combat\Guerrier('Conan');

while ($player1->getVie() >0 && $player2->getVie() > 0) {
    $player1->attaquer($player2);
    echo $player2->getVie() . "<br>";
    $player2->attaquer($player1);
    echo $player1->getVie() . "<br>";
}

echo $player1->getVie() > $player2->getVie()
    ? "Le vainqueur est le joueur 1"
    : "Le vainqueur est le joueur 2";