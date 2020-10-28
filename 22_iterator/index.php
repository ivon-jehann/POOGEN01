<?php
require 'MyIterator.php';

$mi = new MyIterator();

foreach($mi as $k => $v) {
    echo "clé : $k / valeur : $v<br>";
}