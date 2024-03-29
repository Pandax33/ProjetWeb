<?php 
// PERMET DE CONSULTER LA LISTE DES Wishlist
namespace App\Controllers;
use App\Models\EnterpriseModel;
use App\Models\WishlistModel;
use App\Models\OffersModel;

class WishlistController extends Controller
{
    //lister les annonces de la bd
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
                    $offer_state= $offer->State;
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

            $new_wish->state = $offer_state;
            $new_wish->ent = $enterprise_name;
            $new_wish->off = $offer_name;
            $new_wish->duration = $offer_duration;
            $new_wish->publish = $offer_publish;


            $new_offers[] = $new_wish;
        }

        //On affiche la vue que si le role est student
        if($_SESSION['role'] == 'student'){
        $this->smarty->assign('role', $_SESSION['role']);
       
        $this ->smarty->assign('identifiant', $_SESSION['identifiant'] );
        $this->smarty->assign('myArray', $new_offers);
        $this->smarty->assign('Nom','Liste de souhaits');
        $this->smarty->display('wishlist.tpl');

        }elseif ($_SESSION['role'] == 'teacher') {
            $this->smarty->assign('role', $_SESSION['role']);
            $this ->smarty->assign('identifiant', $_SESSION['identifiant'] );
            $this->smarty->display('error403.tpl');
        }
        
    }

    public function monitor(int $id)
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
                    $offer_state= $offer->State;
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

            $new_wish->state = $offer_state;
            $new_wish->ent = $enterprise_name;
            $new_wish->off = $offer_name;
            $new_wish->duration = $offer_duration;
            $new_wish->publish = $offer_publish;


            $new_offers[] = $new_wish;
        }

        //On affiche la vue que si le role est student
        
        $this->smarty->assign('role', $_SESSION['role']);
        //Si $id est null, on prend l'identifiant de la session
        if ($id == null) {
            $id = $_SESSION['identifiant'];
        }

        $this->smarty->assign('identifiant', $id );
        $this->smarty->assign('myArray', $new_offers);
        $this->smarty->assign('Nom','Liste de souhaits');
        $this->smarty->display('wishlist_m.tpl');
        
        
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

    public function removeWishlist(int $id){
        // On instancie le modèle
        $wishlistModel = new WishlistModel;
        $wishlist = $wishlistModel->findBy(['ID_O' => $id, 'ID_P' => $_SESSION['identifiant']]);
        //Si l'offre est dans la wishlist, on la supprime
        if(!empty($wishlist)){
            $wishlistModel = new WishlistModel;

            
            $wishlistModel -> deletePrecis($_SESSION['identifiant'], $id );
            header('Location: /public/index.php?p=wishlist');
            
        }else{
            // Actualiser la page
            header('Location: /public/index.php?p=wishlist');
        }

       
    }

    


}