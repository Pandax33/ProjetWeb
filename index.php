<?php 
use App\Autoloader;
use App\Models\OffersModel;
use App\Models\UsersModel;

require_once 'Autoloader.php';
Autoloader::register();

echo '<h1>page menu</h1>';

$user = $model = new UsersModel;
$model->setEmail('koikoubeh@gmail.com')
        ->setPassword(password_hash('0000', PASSWORD_ARGON2I));
$model ->create($model);






?>