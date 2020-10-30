<?php


namespace Mediatheque02\Controller;


class AppController
{
    public function home() {
        require_once 'Vue/App/home.phtml';
    }

    public function page404() {
        require_once 'Vue/App/404.phtml';
    }
}