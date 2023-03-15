<?php
namespace App\Core;

use App\Controllers\MainController;

class Main
{
    public function start()
    {
        // On retire le trailing slash
        $uri = $_SERVER['REQUEST_URI'];


        // On verifie que URI n'est pas vide et qu'il ne se termine pas par un /
        if (!empty($uri) && $uri != '/' && $uri[-1] == '/') {
            $uri = substr($uri, 0, -1);

            // On redirige vers la bonne URI
            http_response_code(301);
            header('Location: ' . $uri);
            exit;
        }

        // On gère les paramètres d'URL
        // p=controller/methode/params
        // On sépare les paramètres
        $params = [];
        if (isset($_GET['p']))
            $params = explode('/', $_GET['p']);
        

        if($params[0] != '')
        {
            // on a au moins un paramètre
        }else{
            // On a pa de paramètre
            // On instancie le controlleur par défaut
            $controller = new \App\Controllers\MainController();
            $controller->index();
        }

    }
}