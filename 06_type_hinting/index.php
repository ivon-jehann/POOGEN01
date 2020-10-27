<?php
declare(strict_types=1);

require 'Formatter.php';

$formatter = new Formatter();
$formatter->formatText('Il fait beau aujourd\'HUI');
echo '<br>';
$formatter->formatText(null);

echo '<br>';
$formatter->state = 103;
echo $formatter->state;