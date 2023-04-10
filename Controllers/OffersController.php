<?php 
// PERMET DE CONSULTER LA LISTE DES ANNONCES
namespace App\Controllers;
use App\Models\OffersModel;

class OffersController extends Controller
{
    //lister les annonces de la bdd
    public function index()
    {
        //On instancie le modele coresspondant a la table offers
        $offersModel = new OffersModel;

        //On recupere les annonces de la bdd 
        $offers = $offersModel->findBy(['state' => 1]);
        $this -> render('offers/index', ['offers' => $offers]);

    }

    // Afficher une annonce
    public function lire(int $id){
        // On instancie le modèle
        $offersModel = new OffersModel;

        // On récupère l'annonce
        $offer = $offersModel->find($id);

        // On affiche la vue
        $this->render('offers/lire', ['offer' => $offer]);
    }
}