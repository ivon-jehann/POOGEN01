<?php


namespace Mediatheque02\Controller;


use Twig\Environment;
use Twig\Loader\FilesystemLoader;

abstract class AbstractController
{
    protected $twig;

    public function __construct() {
        $loader = new FilesystemLoader('Template');
        $this->twig = new Environment($loader);
    }
}