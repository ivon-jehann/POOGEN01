<?php
namespace Composition;

require 'Piece.php';
require 'Maison.php';

$m = new Maison(
    '15 rue de la Paix',
    new Piece('salle de bain', 9.3),
    new Piece('sallon', 25.8),
    new Piece('cuisine', 12)
);

echo $m;