<?php
//PERMET D'ACCEDER A LA PAGE D'ACCUEIL
namespace App\Controllers;
use App\Models\PersonModel;

class SignupController extends Controller
{
    //afficher la page de login
    public function login()
    {
        //on instancie le modele coresspondant a la table person
        $personModel = new PersonModel;


        $this -> render('signup/login', []);

    }

    // fonction de connexion 
    public function connect()
    {
        //on instancie le modele coresspondant a la table person
        $personModel = new PersonModel;
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo $email;
        echo "<br>";
        echo $password;

        //verifier si les données du formulaire correspondent à un enregistrement dans la bdd
        $user = $personModel->findBy([
            'mail' => $email,
            'password' => $password
        ]);
        
        //Si $user est un tableau, c'est que l'utilisateur existe
        if($user){
            //on stocke les données de l'utilisateur dans la session
            $_SESSION['user'] = $user;
            //on redirige l'utilisateur vers la page d'accueil
            header('Location: /public/index.php?p=main/index');
        }else{
            //sinon on le redirige vers la page de login
            header('Location: /public/index.php?p=signup/login');
            
            
        }
        














       // $this -> render('signup/connect', ['email' => $email, 'password' => $password]);


        /*
        //on recupere les donnees du formulaire
       

        //on verifie si les donnees du formulaire sont dans la bdd avec la méthode findBy
        $user = $personModel->findBy([
            'email' => $email,
            'password' => $password
        ]);

        //si l'utilisateur existe on le connecte et on le redirige vers la page d'accueil
        if($user){
            $_SESSION['user'] = $user;
            header('Location: /');
            echo "Vous êtes connecté";
        }else{
            //sinon on le redirige vers la page de login
            header('Location: /login');
            echo "Vous n'êtes pas connecté";
        }
        */

    }

    


}