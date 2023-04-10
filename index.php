<?php 
use App\Autoloader;
use App\Models\OffersModel;

require_once 'Autoloader.php';
Autoloader::register();
echo '<h1>Crud Rigolo Un Deux (C.R.U.D)</h1>';

// On instancie la classe Model avec la table offers
$model = new OffersModel();

// METHODE DE READ
$annonces = $model->find(3);
foreach ($annonces as $key => $value) {
    echo $key . ' : ' . $value . '<br>';
}





?>