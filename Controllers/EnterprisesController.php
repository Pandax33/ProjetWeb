<?php 
// PERMET DE CONSULTER LA LISTE DES Entreprises
namespace App\Controllers;
use App\Models\EnterpriseModel;
use App\Models\LocateModel;
use App\Models\CityModel;

class EnterprisesController extends Controller
{
    //lister les entreprises de la bdd
    public function index()
    {
        //On instancie le modele coresspondant a la table enterprises
        $enterpriseModel = new EnterpriseModel;

        //On recupere les entreprises de la bdd 
        $enterprises = $enterpriseModel->findAll();
        $this->smarty->assign('myArray', $enterprises);
        $this->smarty->assign('Nom','Liste des entreprises');
        $this->smarty->display('TemplateEntreprise.tpl');
    }

    // Afficher une annonce
    public function detail(int $id){
        // On instancie le modèle
        $enterpriseModel = new EnterpriseModel;

        // On récupère l'entreprise
        $enterprise = $enterpriseModel->find($id);

        // On affiche la vue
        $this->render('enterprises/detail', ['enterprise' => $enterprise]);
    }

    public function modifier(){
        $enterpriseModel = new EnterpriseModel;
        $locateModel= new LocateModel;
        $cityModel= new CityModel;
        // On recupere les entreprises de la bdd
        $enterprises = $enterpriseModel->findAll();
        $locate= $locateModel->findAll();
        $city= $cityModel->findAll();
        
        // Création du tableau associatif pour relier l'ID_E au nom de la localité
        $localite_map = [];
        foreach ($locate as $loc) {
            foreach ($city as $ct) {
                if ($loc->Name == $ct->Name) {
                    $localite_map[$loc->ID_E] = $ct->Name;
                    break;
                }
            }
        }
    
        // Ajout de la localité à chaque entreprise
        foreach ($enterprises as &$enterprise) {
            $enterprise->Localite = $localite_map[$enterprise->ID_E];
        }
        
        $this->smarty->assign('entreprises', $enterprises);
        $this->smarty->assign('city', $city);
        $this->smarty->assign('locate', $locate);
        $this->smarty->display('TemplateEditEnterprise.tpl');
        var_dump($enterprises);
    }
}