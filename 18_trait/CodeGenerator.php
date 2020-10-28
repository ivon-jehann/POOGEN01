<?php


namespace Traits;

/*
 * utilisation le mot clé trait
 */
trait CodeGenerator
{
    public function generateCode()
    {
        return "2020-" . uniqid();
    }
}