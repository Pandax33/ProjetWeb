<?php 
// PERMET DE CONSULTER LA LISTE DES ANNONCES
namespace App\Controllers;
use App\Models\EnterpriseModel;
use App\Models\OffersModel;
use App\Models\CityModel;
use App\Models\WishlistModel;

class OffersController extends Controller
{
    //lister les annonces de la bdd
    public function index()
    {
        //On instancie le modele coresspondant a la table offers
        $offersModel = new OffersModel;
        $enterpriseModel = new EnterpriseModel;
        $wishlistModel = new WishlistModel;

        //On recupere les annonces de la bdd 
//Si le role est student, on affiche seulement les offres publiées avec un FindBy
//Si le role est admin ou teacher, on affiche toutes les offres avec un FindAll
        if($_SESSION['role'] == 'student'){
            $offers = $offersModel->findBy(['state' => 1]);
        }else{
            $offers = $offersModel->findAll();
        }

        $enterprises = $enterpriseModel->findAll();
        $wishlist = $wishlistModel->findAll();

        $new_offers = array();

foreach ($offers as $offer) {
    $new_offer = clone $offer; // Cloner l'objet pour éviter de modifier l'original
    $id_e = $offer->ID_E;
    $id_o = $offer->ID_O;
    
    // Trouver l'entreprise correspondante
    $enterprise_name = "";
 // On verifie si il existe une association entre l'offre et l'id de la personne connectée
 // Si oui, on ajoute un attribut "wish" à l'objet $new_offer pour pouvoir afficher le bouton "Ajouter à la wishlist"
    foreach ($wishlist as $wish) {
        if ($wish->ID_O == $id_o && $wish->ID_P == $_SESSION['identifiant']) {
            $new_offer->wish = 1;
            break;
        }else{
            $new_offer->wish = 0;
        }
    }
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
        $this->smarty->assign('myArray', $new_offers);
        $this->smarty->assign('Nom','Liste des offres');
        $this->smarty->display('offers.tpl');

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

    // Afficher le formulaire de création d'une annonce
    public function cree(){
        // On affiche la vue
        $cityModel= new CityModel;
        $city=$cityModel->findAll();
        $this->smarty->assign('city', $city);
        $this->smarty->display('TemplateCreateOffers.tpl');
    }
    
    //ajouter à la wishlist
    public function addWishlist(int $id){
        // On instancie le modèle
        //On verifie dans la bdd si l'offre est deja dans la wishlist avec un findby
        $wishlistModel = new WishlistModel;
        $wishlist = $wishlistModel->findBy(['ID_O' => $id, 'ID_P' => $_SESSION['identifiant']]);
        //Si l'offre n'est pas dans la wishlist, on l'ajoute
        if(empty($wishlist)){
            $wishlistModel = new WishlistModel;
            $wishlistModel -> setIdP($_SESSION['identifiant']);
            $wishlistModel -> setIdO($id);
            $wishlistModel -> create($wishlistModel);
            header('Location: /public/index.php?p=offers');
        }else{
            header('Location: /public/index.php?p=offers');
        }

       
    }

    //supprimer de la wishlist
    public function removeWishlist(int $id){
        // On instancie le modèle
        $wishlistModel = new WishlistModel;
        $wishlist = $wishlistModel->findBy(['ID_O' => $id, 'ID_P' => $_SESSION['identifiant']]);
        //Si l'offre est dans la wishlist, on la supprime
        if(!empty($wishlist)){
            $wishlistModel = new WishlistModel;

            
            $wishlistModel -> deletePrecis($_SESSION['identifiant'], $id );
            header('Location: /public/index.php?p=offers');
            
        }else{
            header('Location: /public/index.php?p=offers');
        }

       
    }

}