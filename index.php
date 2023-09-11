<?php
use class\ITEmploee;


require_once __DIR__.'/vendor/autoload.php';

$it = new ITEmploee('Ivan', 'Ivanov', 100000, 10, 10, 100);
$it->Show();
