<?php 
// PERMET DE CONSULTER LA LISTE DES ÉTUDIANTS
namespace App\Controllers;
use App\Models\PersonModel;


class AccueilController extends Controller
{
    //lister les étudiants de la bdd
    public function index()
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
            echo '<p> Vous êtes connecté en tant que : '.$role. ' '.$identifiant.'</p>';

        //On récupère les étudiants de la bdd 
        $this->smarty->display('accueil.tpl');

    }else{
        //sinon on le redirige vers la page de login
        header('Location: /public/index.php?p=login');

}
}
}