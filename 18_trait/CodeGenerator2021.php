<?php

namespace Traits;

trait CodeGenerator2021
{
    public function generateCode()
    {
        return "2021-" . uniqid();
    }
}