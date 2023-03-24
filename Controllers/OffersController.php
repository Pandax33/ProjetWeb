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

        $this->smarty->assign('myArray', $offers);
        $this->smarty->assign('Nom','Liste des offres');
        $this->smarty->display('ma_template.tpl');

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
<<<<<<< Updated upstream
    public function create(){
        // On affiche la vue
        $this->render('offers/create');
=======
    public function cree(){
        $enterpriseModel= New EnterpriseModel;
        $enterprise=$enterpriseModel->findAll();
        $cityModel= new CityModel;
        $city=$cityModel->findAll();
        $this->smarty->assign('enterprise',$enterprise);
        $this->smarty->assign('city', $city);
        $this->smarty->display('TemplateCreateOffers.tpl');
>>>>>>> Stashed changes
    }

    public function create(){
        $offersModel = new OffersModel;
        $offersModel->create($_POST);
        $this->index();
    }
}