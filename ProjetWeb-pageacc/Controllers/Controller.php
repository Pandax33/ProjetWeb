<?php

namespace App\Controllers;
Use Smarty;
require_once __DIR__ . '/../vendor/autoload.php';
class Controller
{   
   public $smarty;
     public function render(string $fichier, array $data = [], string $template = 'default')
     {
        // On extrait les données du tableau $data
        extract($data);

        // On démarre le buffer de sortie
        ob_start();
        // A partir de ce point, tout est stocké en mémoire
       
        // On crée le chemin vers la vue
        require_once ROOT.'/Views/'.$fichier.'.php';

        // On récupère le contenu du buffer de sortie
        $contenu = ob_get_clean();

        // On affiche le contenu du buffer de sortie
        require_once ROOT.'/Views/'.$template.'.php';


     }
     public function __construct(){
         
         $this->smarty = new Smarty();
         $this->smarty->setTemplateDir(ROOT . '/Views/templates');
         $this->smarty->setCompileDir(ROOT . '/Views/templates_c');
         $this->smarty->setCacheDir(ROOT . '/Views/cache');
     }
}