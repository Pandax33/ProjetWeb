<?php 
// PERMET DE CONSULTER LA LISTE DES ANNONCES
namespace App\Controllers;
use App\Models\EnterpriseModel;
use App\Models\OffersModel;
use App\Models\CityModel;

class OffersController extends Controller
{
    //lister les annonces de la bdd
    public function index()
    {
        //On instancie le modele coresspondant a la table offers
        $offersModel = new OffersModel;
        $enterpriseModel = new EnterpriseModel;

        //On recupere les annonces de la bdd 
        $offers = $offersModel->findBy(['state' => 1]);
        $enterprises = $enterpriseModel->findAll();

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
        $enterpriseModel= New EnterpriseModel;
        $enterprise=$enterpriseModel->findAll();
        $cityModel= new CityModel;
        $city=$cityModel->findAll();
        $this->smarty->assign('enterprise',$enterprise);
        $this->smarty->assign('city', $city);
        $this->smarty->display('TemplateCreateOffers.tpl');
    }

    public function create(){
        $offersModel = new OffersModel;

        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $test="non";
            $target_dir = "../Views/image/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
            // Vous pouvez ajouter des vérifications supplémentaires, par exemple vérifier la taille du fichier ou le type de fichier
        
            // Tentez de déplacer le fichier téléchargé vers le dossier de destination
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "L'image ". htmlspecialchars(basename($_FILES["image"]["name"])). " a été téléchargée.";
            } else {
                echo "Erreur lors du téléchargement de l'image.";
            }
        }

        $offersModel->setEntitled_O($_POST['Intitule']);
        $offersModel->setDuration_O($_POST['Duree']);
        $offersModel->setSalary_O($_POST['Salaire']);
        $offersModel->setDescription($_POST['description']);
        $offersModel->setLinkPicture(basename($_FILES["image"]["name"]));
        $offersModel->setSpace_O($_POST['nbStagiaire']);
        $offersModel->setIde($_POST['ID']);
        $offersModel->setName($_POST['Lieux']);
        if($_POST['visible']== "visible"){
            $offersModel->setState(1);}
        else{
            $offersModel->setState(0);
        }
        $offersModel->create($offersModel);
        
        
        
    }
}