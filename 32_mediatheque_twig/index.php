<?php

session_start();

function simpleAutoload($fqcn) {
    $elements = explode('\\', $fqcn);
    array_shift($elements);
    include_once implode(DIRECTORY_SEPARATOR, $elements) . '.php';
}

spl_autoload_register('simpleAutoload');

require_once '../vendor/autoload.php';

$entity = $_GET['entity'] ?? null;
$action = $_GET['action'] ?? null;

const PAGE_PUBLIC = [
    'App' => ['home', 'page404'],
    'User' => ['signin', 'connexion'],
    'Livre' => ['list', 'last'],
    'Film' => ['list', 'last']
];

if(!is_null($entity) && !is_null($action) ) {
    $controllerFQCN = 'Mediatheque02\\Controller\\' . $entity . 'Controller';

    if (class_exists($controllerFQCN)) {
        $controller = new $controllerFQCN();
        if (method_exists($controller, $action)) {
            if (in_array($action, PAGE_PUBLIC[$entity]) || isset($_SESSION['connected'])) {
                call_user_func_array([$controller, $action], []);
            }else{
                echo 'merci de vous connecter';
            }
        }else{
            header('Location: /32_mediatheque_twig/index.php?entity=App&action=page404');
        }
    }else{
        header('Location: /32_mediatheque_twig/index.php?entity=App&action=page404');
    }
}else{
    header('Location: /32_mediatheque_twig/index.php?entity=App&action=home');
}