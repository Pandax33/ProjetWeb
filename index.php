<?php 
use App\Autoloader;
use App\Models\OffersModel;

require_once 'Autoloader.php';
Autoloader::register();

echo '<h1>page menu</h1>';

$model = new OffersModel();
$annonces = $model->find(1);
var_dump($annonces);





?>