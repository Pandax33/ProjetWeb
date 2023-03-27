<?php 
// PERMET DE CONSULTER LA LISTE DES ÉTUDIANTS
namespace App\Controllers;
use App\Models\EnterpriseModel;
use App\Models\PersonModel;


class AccueilController extends Controller
{
    //lister les étudiants de la bdd
    public function index()
    {
        
        //On récupère les étudiants de la bdd 
        $this ->smarty->assign('role', $_SESSION['role']);
        $this ->smarty->assign('identifiant', $_SESSION['identifiant'] );
        //On instancie le modele coresspondant a la table enterprises
        $enterpriseModel = new EnterpriseModel;
        $array = array(0, 1, 2);
        //On recupere les entreprises de la bdd 
        $enterprises = $enterpriseModel->findAll();
        
        $this->smarty->assign('myArray', $enterprises);
        $this->smarty->assign('array', $array);
        $this->smarty->assign('Nom','Liste des entreprises');
        
        $this->smarty->display('accueil.tpl');
        
    }
}
