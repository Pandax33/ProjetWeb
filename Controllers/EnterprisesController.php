<?php 
// PERMET DE CONSULTER LA LISTE DES Entreprises
namespace App\Controllers;
use App\Models\EnterpriseModel;

class EnterprisesController extends Controller
{
    //lister les entreprises de la bdd
    public function index()
    {
        //On instancie le modele coresspondant a la table enterprises
        $enterpriseModel = new EnterpriseModel;

        //On recupere les entreprises de la bdd 
        $enterprises = $enterpriseModel->findAll();
        
        $this->smarty->assign('role', $_SESSION['role']);
        $this->smarty->assign('myArray', $enterprises);
        $this->smarty->assign('Nom','Liste des entreprises');
        $this->smarty->display('enterprises.tpl');

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
}