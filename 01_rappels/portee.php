<?php

$a = 42;

function maFonction() {
    global $a;
    return ++$a;
}

echo maFonction();

echo $a;