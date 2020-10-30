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
            echo "L'action n'existe pas";
        }
    }else{
        echo "L'entité n'existe pas";
    }
}else{
    require 'Vue/menu.phtml';
    echo "l'action n'est pas définie.";
}