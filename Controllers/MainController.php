<?php
//PERMET D'ACCEDER A LA PAGE D'ACCUEIL
namespace App\Controllers;

class MainController extends Controller
{
    public function index()
    {
        echo "Ceci est l'accueil";
    }
}