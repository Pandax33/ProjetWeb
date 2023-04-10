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
        //Si le role dans la session est student, alors $role = "Etudiant"
        if($_SESSION['role'] == 'student'){
            $role = "apprenant.e";
        }
        //Si le role dans la session est enterprise, alors $role = "Entreprise"
        if($_SESSION['role'] == 'teacher'){
            $role = "pilote";
        }
        //Si le role dans la session est admin, alors $role = "Administrateur"
        if($_SESSION['role'] == 'admin'){
            $role = "administrateur.e";
        }
        //On récupère les étudiants de la bdd 
        $this ->smarty->assign('titre', $role);
        $this ->smarty->assign('role', $_SESSION['role'] );
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
