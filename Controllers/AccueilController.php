<?php 
// PERMET DE CONSULTER LA LISTE DES ÉTUDIANTS
namespace App\Controllers;
use App\Models\PersonModel;


class AccueilController extends Controller
{
    //lister les étudiants de la bdd
    public function index()
    {
        
        //On récupère les étudiants de la bdd 
        $this ->smarty->assign('role', $_SESSION['role']);
        $this->smarty->display('accueil.tpl');
    }
}
