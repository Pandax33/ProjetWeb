<?php

namespace App\Controllers;

abstract class Controller
{   
     public function render(string $fichier, array $data = [])
     {
        // On extrait les données du tableau $data
        extract($data);

        // On démarre le buffer de sortie
        ob_start();
        // A partir de ce point, tout est stocké en mémoire
       
        require_once ROOT.'/Views/'.$fichier.'.php';
        $contenu = ob_get_clean();

        require_once ROOT.'/Views/default.php';


     }
}