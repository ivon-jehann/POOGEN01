<?php

function monAutoload($fqcn) {
    $elements = explode('\\', $fqcn);
    include_once 'class/' . end($elements).'.php';
}

spl_autoload_register('monAutoload');

$registre = new \Usine\Personnel();
$registre->ajouterEmploye(new \Usine\Vendeur(
    'Business',
    'Pierre',
    45,
    DateTime::createFromFormat('Y', 1995),
    30000
))->ajouterEmploye(new \Usine\Representant(
    'Vendtout',
    'Léon',
    25,
    DateTime::createFromFormat('Y', 2001),
    20000
))->ajouterEmploye(new \Usine\Producteur(
    'Bosseur',
    'Yves',
    28,
    DateTime::createFromFormat('Y', 1998),
    1000
))->ajouterEmploye(new \Usine\Manutentionnaire(
    'Stocketout', 'Jeanne', 32,
    DateTime::createFromFormat('Y', 1998),
    45
))->ajouterEmploye(new \Usine\ProducteurRisque('Flippe', 'Jean', 28,
    DateTime::createFromFormat('Y', 2000),
    1000
))->ajouterEmploye(new \Usine\ManutentionnaireRisque('Abordage', 'Al', 30,
    DateTime::createFromFormat('Y', 2001),
    45
))->calculerSalaires()->salaireMoyen();