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
        $offers = $offersModel->findAll();
        $enterprises = $enterpriseModel->findAll();
        $wishlist = $wishlistModel->findAll();

        $new_offers = array();

        // On ajoute l'offre correspondante à chaque ID_O de la wishlist
        foreach ($wishlist as $wish) {
            $new_wish = clone $wish; // Cloner l'objet pour éviter de modifier l'original

            $id_o = $wish->ID_O;
            
            // Trouver l'offre correspondante
            $offer_name = "";
            foreach ($offers as $offer) {
                if ($offer->ID_O == $id_o) {
                    $offer_name = $offer->Entitled_O;
                    $offer_duration = $offer->Duration_O;
                    $offer_publish = $offer->DatePublish_O;
                    $offer_Enterprise = $offer->ID_E;
                    break;
                }
            }
            //Trouver l'entreprise correspondante
            $enterprise_name = "";
            foreach ($enterprises as $enterprise) {
                if ($enterprise->ID_E == $offer_Enterprise) {
                    $enterprise_name = $enterprise->Name_E;
                    break;
                }
            }

            $new_wish->ent = $enterprise_name;
            $new_wish->off = $offer_name;
            $new_wish->duration = $offer_duration;
            $new_wish->publish = $offer_publish;


            $new_offers[] = $new_wish;
        }


/*
        $new_offers = array();

// On ajoute l'entreprise correspondante à chaque offre
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
*/


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