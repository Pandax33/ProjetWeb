<?php 
// PERMET DE CONSULTER LA LISTE DES ÉTUDIANTS
namespace App\Controllers;
use App\Models\PersonModel;

class StudentsController extends Controller
{
    //lister les étudiants de la bdd
    public function index()
    {
        //On instancie le modèle correspondant à la table students
        $studentModel = new PersonModel;

        //On récupère les étudiants de la bdd 
        $students = $studentModel->findBy(['Role_P' => 'Student']);
        $this -> render('students/index', ['students' => $students]);

    }

    // Afficher un étudiant
    public function detail(int $id){
        // On instancie le modèle
        $studentModel = new PersonModel;

        // On récupère l'étudiant
        $student = $studentModel->find($id);

        // On affiche la vue
        $this->render('students/detail', ['student' => $student]);
    }
}




