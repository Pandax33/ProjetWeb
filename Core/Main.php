<?php
namespace App\Core;

use App\Controllers\MainController;
//Routeur principal
class Main
{
    public function start()
    {
        session_start();
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
            // On récupère le nom du controlleur
            // On met une majuscule au début, on add le namespace complet avant et on ajoute le suffixe Controller
            $controller = '\\App\\Controllers\\' . ucfirst(array_shift($params)) . 'Controller';

            // On récupère la méthode
            $action = (isset($params[0])) ? array_shift($params) : 'index';
            // A REMETTRE EN CAS DE BUG  -------------------------   
            $controller = new $controller();
            
            if(method_exists($controller, $action)){
                // Si il reste des paramètres, on appelle la méthode en envoyant les paramètres sinon on l'appelle "à vide"
                (isset($params[0])) ? call_user_func_array([$controller, $action],$params): $controller->$action();    
            }else{
                // On envoie le code réponse 404
                http_response_code(404);
                echo "La page recherchée n'existe pas";
            }

        }else{
            // On a pa de paramètre
            // On instancie le controlleur par défaut
            $controller = new MainController();
            $controller->index();
        }

    }
}