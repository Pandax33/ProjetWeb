<?php 
// PERMET DE CONSULTER LA LISTE DES Wishlist
namespace App\Controllers;
use App\Models\WishlistModel;
use App\Models\OffersModel;

class WishlistController extends Controller
{
    //lister les annonces de la bdd
    public function index()
    {
        //On instancie le modele coresspondant a la table offers
        $wishlistModel = new WishlistModel;

        //On recupere les annonces de la bdd 
        $wishlist = $wishlistModel->find();
        $this -> render('wishlist/index', ['wishlist' => $wishlist]);

    }

    // Afficher une annonce
    public function detail(int $id){
        // On instancie le modèle
        $offersModel = new OffersModel;

        // On récupère l'annonce
        $offer = $offersModel->find($id);

        // On affiche la vue
        $this->render('offers/detail', ['offer' => $offer]);
    }


}