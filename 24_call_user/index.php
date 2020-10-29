<?php

function simpleAutoload($fqcn) {
    $elements = explode('\\', $fqcn);
    include_once end($elements).'.php';
}

spl_autoload_register('simpleAutoload');

$action = $_GET['action'] ?? null;
$controller = new \Film\FilmController();
if(!is_null($action) && method_exists($controller, $action)) {
    call_user_func_array([$controller, $action], []);
}else{
    require 'Vue/menu.phtml';
    echo "l'action n'est pas définie.";
}