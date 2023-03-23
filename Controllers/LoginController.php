<?php
//PERMET D'ACCEDER A LA PAGE D'ACCUEIL
namespace App\Controllers;
use App\Models\PersonModel;

class LoginController extends Controller
{
    //afficher la page de login
    public function index()
    {
    
        //on instancie le modele coresspondant a la table person
        $personModel = new PersonModel;


        $this->smarty->display('login.tpl');

    }

    // fonction de connexion 

    public function forgot()
    {

        $this->smarty->display('forgot.tpl');
    }

    public function forgot2()
    {

        $this->smarty->display('forgot2.tpl');
    }
    


}