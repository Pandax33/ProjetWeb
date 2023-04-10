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
        //vider la session active si il y en a une
        session_destroy();

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
    
    public function redirect()
    {
        //On instancie le modèle correspondant à la table students
        $personModel = new PersonModel;
        $email = $_POST['email'];
        $password = $_POST['password'];

 

        //verifier si les données du formulaire correspondent à un enregistrement dans la bdd
        $user = $personModel->findBy([
            'mail' => $email,
            'password' => $password
        ]);
        
        //Si $user est un tableau, c'est que l'utilisateur existe
        if($user){
            //on stocke les données de l'utilisateur dans la session
            $role = $user[0]->Role_P;
            $identifiant = $user[0]->ID_P;
            $_SESSION['role'] = $role;
            $_SESSION['identifiant'] = $identifiant;
            echo '<p> Vous êtes connecté en tant que : '.$role. ' '.$identifiant.'</p>';
            header('Location: /public/index.php?p=accueil');
         }else{
         //sinon on le redirige vers la page de login
              header('Location: /public/index.php?p=login');}


    }


}