<?php 
// PERMET DE CONSULTER LA LISTE DES Wishlist
namespace App\Controllers;
use App\Models\EnterpriseModel;
use App\Models\WishlistModel;
use App\Models\OffersModel;

class WishlistController extends Controller
{
    //lister les annonces de la bdd
    public function index()
    {
        //On instancie le modele coresspondant a la table offers
        $offersModel = new OffersModel;
        $enterpriseModel = new EnterpriseModel;
        $wishlistModel = new WishlistModel;


        //On recupere les annonces de la bdd 
        $offers = $offersModel->findBy(['state' => 1]);
        $enterprises = $enterpriseModel->findAll();
        $wishlist = $wishlistModel->findAll();

        $new_offers = array();

foreach ($offers as $offer) {
    $new_offer = clone $offer; // Cloner l'objet pour éviter de modifier l'original
    $id_e = $offer->ID_E;
    
    // Trouver l'entreprise correspondante
    $enterprise_name = "";
    foreach ($enterprises as $enterprise) {
        if ($enterprise->ID_E == $id_e) {
            $enterprise_name = $enterprise->Name_E;
            break;
        }
    }
    
    $new_offer->ent = $enterprise_name;
    $new_offers[] = $new_offer;
}


        $this->smarty->assign('role', $_SESSION['role']);
        $this ->smarty->assign('identifiant', $_SESSION['identifiant'] );
        $this->smarty->assign('myArray', $new_offers);
        $this->smarty->assign('Nom','Liste de souhaits');
        $this->smarty->display('wishlist.tpl');
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