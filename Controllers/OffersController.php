<?php 
// PERMET DE CONSULTER LA LISTE DES ANNONCES
namespace App\Controllers;

class OffersController extends Controller
{
    public function index()
    {
        $donnees = ['a','b'];
        include_once ROOT . '/Views/offers/index.php';
    }
}