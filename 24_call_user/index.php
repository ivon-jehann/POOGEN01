<?php

function simpleAutoload($fqcn) {
    $elements = explode('\\', $fqcn);
    include_once end($elements).'.php';
}

spl_autoload_register('simpleAutoload');

$action = $_GET['action'] ?? null;

if(!is_null($action)) {
    $controller = new \Film\FilmController();
    call_user_func_array([$controller, $action], []);
}else{
    echo "l'action n'est pas définie";
}