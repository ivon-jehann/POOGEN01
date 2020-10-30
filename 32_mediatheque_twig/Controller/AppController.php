<?php


namespace Mediatheque02\Controller;


class AppController extends AbstractController
{
    public function home() {
        echo $this->twig->render('base.html.twig');
    }

    public function page404() {
        echo $this->twig->render('page404.html.twig');
    }
}