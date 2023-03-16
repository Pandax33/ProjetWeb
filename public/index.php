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









/*
// ZONE DE TEST
echo '<br> ZONE DE TEST <br>';
// On instancie notre modele d'offre
$offer = new \App\Models\OffersModel();
$annonces = $offer->find(1);

//READ
// on affiche le resultat avec une boucle
foreach ($annonces as $key => $value) {
        echo $key . ' : ' . $value . '<br>';
    }

//CREATE

    $annonce = $offer
    ->setEntitled('Titre de l\'annonce')
        ->setDuration('Durée de l\'annonce')
        ->setSalary('Salaire de l\'annonce')
        ->setSpace_available(10)
        ->setState(1)
        ->setDescription('Description de l\'annonce');
$offer->create($annonce);
*/
?>