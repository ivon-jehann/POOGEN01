<?php

/*
 * composer install va permettre d'installer les dépendences décrites dans les fichier composer.json
 * et composer.lock
 * sinon on peut ajouter la dépendance souhaitée via la commande composer require vendor/project
 *
 * on va en général versionner juste les fichiers composer.json et composer.lock, mais pas le dossier vendor
 */

// on utilise l'autoloader de composer pour avoir accès aux classes des dépendances
require_once '../vendor/autoload.php';

$log = new \Monolog\Logger('monLogger');
$log->pushHandler(new \Monolog\Handler\StreamHandler('monLogger.log', \Monolog\Logger::INFO));

$log->warning('Attention je loggue un message');
$log->info('Bonjour nous sommes le 29 octobre 2020');