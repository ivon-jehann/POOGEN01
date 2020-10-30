<?php

function simpleAutoload($fqcn) {
    $elements = explode('\\', $fqcn);
    array_shift($elements);
    include_once implode(DIRECTORY_SEPARATOR, $elements) . '.php';
}

spl_autoload_register('simpleAutoload');

$entity = $_GET['entity'] ?? null;
$action = $_GET['action'] ?? null;

$controller = new \Mediatheque\Controller\FilmController();
if(!is_null($entity) && !is_null($action) ) {
    $controllerFQCN = 'Mediatheque\\Controller\\' . $entity . 'Controller';

    if (class_exists($controllerFQCN)) {
        $controller = new $controllerFQCN();
        if (method_exists($controller, $action)) {
            call_user_func_array([$controller, $action], []);
        }else{
            header('Location: /31_exercice_mediatheque/index.php?entity=App&action=page404');
        }
    }else{
        header('Location: /31_exercice_mediatheque/index.php?entity=App&action=page404');
    }
}else{
    header('Location: /31_exercice_mediatheque/index.php?entity=App&action=home');
}