<?php 
// PERMET DE CONSULTER LA LISTE DES ÉTUDIANTS
namespace App\Controllers;
use App\Models\EnterpriseModel;
use App\Models\PersonModel;


class DeconnecteController extends Controller
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
        
        $this->smarty->display('Deconnecte.tpl');
        
    }
}