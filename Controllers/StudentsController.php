<?php 
// PERMET DE CONSULTER LA LISTE DES ÉTUDIANTS
namespace App\Controllers;
use App\Models\PersonModel;

class StudentsController extends Controller
{
    //lister les étudiants de la bdd
    public function index()
    {
        if($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'teacher'){
        //On instancie le modèle correspondant à la table students
        $studentModel = new PersonModel;

        //On récupère les étudiants de la bdd 

            
       
        $students = $studentModel->findBy(['Role_P' => 'Student']);
        $this ->smarty->assign('role', $_SESSION['role']);
        $this->smarty->assign('myArray', $students);
        $this->smarty->display('students.tpl');
        }
        else{
        // On redirige vers la page d'accueil
        $this->smarty->assign('role', $_SESSION['role']);
            $this ->smarty->assign('identifiant', $_SESSION['identifiant'] );
            $this->smarty->display('error403.tpl');
    }
}
    public function detail(int $id){
        // On instancie le modèle
        $studentModel = new PersonModel;

        // On récupère l'étudiant
        $student = $studentModel->find($id);

        // On affiche la vue
        $this->render('students/detail', ['student' => $student]);
    }
}




