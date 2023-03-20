<?php

namespace App\Controllers;

abstract class Controller
{   
     public function render(string $fichier, array $data = [])
     {
        // On extrait les données du tableau $data
        extract($data);

        require_once ROOT.'/Views/'.$fichier.'.php';


     }
}