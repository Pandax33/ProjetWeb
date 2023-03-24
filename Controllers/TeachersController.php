<?php 
// PERMET DE CONSULTER LA LISTE DES ANNONCES
namespace App\Controllers;
use App\Models\PersonModel;

class TeachersController extends Controller
{
    //lister les annonces de la bdd
    public function index()
    {
        //On instancie le modele coresspondant a la table offers
        $teacherModel = new PersonModel;

        //On recupere les annonces de la bdd 
        $teachers = $teacherModel->findBy(['Role_P' => 'Teacher']);
        $this -> render('teachers/index', ['teachers' => $teachers]);

    }

    // Afficher une annonce
    public function detail(int $id){
        // On instancie le modèle
        $teacherModel = new PersonModel;

        // On récupère l'annonce
        $teacher = $teacherModel->find($id);

        // On affiche la vue
        $this->render('teachers/detail', ['teacher' => $teacher]);
    }
}