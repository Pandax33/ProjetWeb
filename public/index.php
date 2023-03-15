<?php 

use App\Autoloader;
use App\Core\Main;

define('ROOT', dirname(__DIR__));

// On importe l'autoloader
require_once ROOT . '/Autoloader.php';
Autoloader::register();

// On instancie Main (ROUTEUR)
$app = new Main();

// On lance l'application
$app->start();
?>