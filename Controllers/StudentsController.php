<?php 
// PERMET DE CONSULTER LA LISTE DES ÉTUDIANTS
namespace App\Controllers;
use App\Models\PersonModel;
use App\Models\_IsModel;
use App\Models\OwnModel;
use App\Models\CenterModel;
use App\Models\PromotionModel;
use App\Models\CompetenceModel;
use App\Models\Model;

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
        if($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'teacher'){
        // On instancie le modèle
        $studentModel = new PersonModel;
        $isModel = new _IsModel;
        // On récupère l'étudiant
        $student = $studentModel->find($id);
        // On récupère la promotion de l'étudiant a condition qu'il en ait une, sinon on affiche un message
        $is = $isModel->find($id);
        if($is == null){
            //Forcer l'affichage d'un message d'erreur
            $is = $isModel->find(4);
        }

        $this->smarty->assign('role', $_SESSION['role']);
        $this->smarty->assign('etudiant', $student);
        $this->smarty->assign('pro', $is);
        $this->smarty->assign('Nom',"Détails de l'étudiant");
        $this->smarty->display('details/student.tpl');
         
       
    
        }else{
            
            $this->smarty->assign('role', $_SESSION['role']);
            $this ->smarty->assign('identifiant', $_SESSION['identifiant'] );
            $this->smarty->display('error403.tpl');
        }
    }

    public function modifier(){
        $studentModel=new PersonModel;
        $students=$studentModel->findBy(['Role_P' => 'Student']);
        $OwnModel=new OwnModel;
        $IsModel=new _IsModel;
        $Own=$OwnModel->findAll();
        $Is=$IsModel->findAll();
        $CenterModel=new CenterModel;
        $centers=$CenterModel->findAll();
        $PromotionModel=new PromotionModel;	
        $promotions=$PromotionModel->findAll();
        $CompetenceModel=new CompetenceModel;
        $competences=$CompetenceModel->findAll();
        $promotion_map = [];
        foreach ($Is as $is) {
            if (!isset($promotion_map[$is->ID_P])) {
                $promotion_map[$is->ID_P] = [];
            }
            array_push($promotion_map[$is->ID_P], $is->Name_Promotion);
        }

        // Ajout des noms de promotions à chaque étudiant
        foreach ($students as &$student) {
            if (isset($promotion_map[$student->ID_P])) {
                $student->Promotions = implode(", ", $promotion_map[$student->ID_P]);
            } else {
                $student->Promotions = "";
            }
    }

    $competence_map = [];
    foreach ($Own as $own) {
        if (!isset($competence_map[$own->ID_P])) {
            $competence_map[$own->ID_P] = [];
        }
        array_push($competence_map[$own->ID_P], $own->Name_Competence);
    }

    // Ajout des noms de compétences à chaque étudiant
    foreach ($students as &$student) {
        if (isset($competence_map[$student->ID_P])) {
            $student->Competences = implode(", ", $competence_map[$student->ID_P]);
        } else {
            $student->Competences = "";
        }
}

        $this->smarty->assign('students',$students );
        $this->smarty->assign('own', $Own);
        $this->smarty->assign('is', $Is);
        $this->smarty->assign('center', $centers);
        $this->smarty->assign('promotion', $promotions);
        $this->smarty->assign('competence', $competences);

        $this->smarty->display('TemplateEditStudent.tpl');
        
    }

    public function update(){
        $personModel = new PersonModel;
        $personModel->setID_P($_POST['ID']);
        $personModel->setFirstname_P($_POST['Prenom']);
        $personModel->setLastname_P($_POST['Nom']);
        $personModel->setMail($_POST['Mail']);
        $personModel->setLinkPicture(basename($_FILES["image"]["name"]));
        $personModel->setName_Center($_POST['Centre']);
        $personModel->update($personModel->getID_P(),$personModel); 

        $IsModel=new _IsModel;
        $IsModel->setIdP($_POST['ID']);
        $IsModel->setNamePromotion($_POST['Promotion']);
        $IsModel->update($IsModel->getIdP(),$IsModel);

        $OwnModel=new OwnModel;
        $Own=$OwnModel->findAll();

        // On récupère les compétences sélectionnées à partir du formulaire
$selectedCompetences = $_POST['competence'];
$idP = $personModel->getID_P();

// Créez un tableau des noms de compétences dans Own pour l'ID_P spécifié
$existingCompetences = [];
foreach ($Own as $own) {
    if ($own->ID_P == $idP) {
        array_push($existingCompetences, $own->Name_Competence);
    }
}

foreach ($selectedCompetences as $competence) {
    // Recherche de la compétence sélectionnée dans le tableau Own
    $found = false;
    foreach ($Own as $own) {
        if ($own->Name_Competence == $competence && $own->ID_P == $idP) {
            $found = true;
            break;
        }
    }

    if (!$found) {
        
        $OwnModel->setIdP($idP);
        $OwnModel->setNameCompetence($competence);
        $OwnModel->create($OwnModel);
    } else {
        
    }
    }
    
    // Trouvez les compétences qui sont dans existingCompetences mais pas dans selectedCompetences
    $missingCompetences = array_diff($existingCompetences, $selectedCompetences);
    
    // Affichez les compétences manquantes
    foreach ($missingCompetences as $missingCompetence) {
    
    $OwnModel->deletePrecis($idP, $missingCompetence);
    }
    

        

    $this ->smarty->display('details/m_s.tpl');
    
    }

    public function cree(){
        $CenterModel=new CenterModel; 

        $centers=$CenterModel->findAll();
        $PromotionModel=new PromotionModel;	
        $promotions=$PromotionModel->findAll();
        $CompetenceModel=new CompetenceModel;
        $competences=$CompetenceModel->findAll();

        $this->smarty->assign('center', $centers);
        $this->smarty->assign('promotion', $promotions);
        $this->smarty->assign('competence', $competences);
        $this->smarty->display('TemplateCreateStudent.tpl');

       
        
    }

    public function create(){
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        $charactersLength = strlen($characters);
        $randomPassword = '';
    
        for ($i = 0; $i < 10; $i++) {
            $randomPassword .= $characters[rand(0, $charactersLength - 1)];
        }
    
        
        $personModel = new PersonModel;
        $personModel->setFirstname_P($_POST['Prenom']);
        $personModel->setLastname_P($_POST['Nom']);
        $personModel->setMail($_POST['Mail']);

        $personModel->setRole_P('student');

        $personModel->setPassword($randomPassword);
        $personModel->setLinkPicture(basename($_FILES["image"]["name"]));
        $personModel->setName_Center($_POST['Centre']);

        $personModel->create($personModel);


        $foundId = null;

// Récupérer les valeurs de getFirstName et getLastName
$firstNameToCompare = $personModel->getFirstname_P();
$lastNameToCompare = $personModel->getLastname_P();

// Parcourir le tableau des résultats à partir de la fin
for ($i = count($personModel->findAll()) - 1; $i >= 0; $i--) {
    $person = $personModel->findAll()[$i];

    // Comparer les FirstName et LastName avec les valeurs de getFirstName et getLastName
    if ($person->Firstname_P === $firstNameToCompare && $person->Lastname_P === $lastNameToCompare) {
        $foundId = $person->ID_P;
        break;
    }
}


        $IsModel=new _IsModel;
        $IsModel->setIdP($foundId);
        $IsModel->setNamePromotion($_POST['Promotion']);
        $IsModel->create($IsModel);

        

        $OwnModel=new OwnModel;
        $Own=$_POST['competence'];
        foreach ($Own as $own) {
            
            $OwnModel->setIdP($foundId);
            $OwnModel->setNameCompetence($own);
            
            
            $OwnModel->create($OwnModel);
            
        }

        $this ->smarty->display('details/c_s.tpl');

    }
    public function suppr(int $id){
        $studentModel = new PersonModel;

        //Supprimer les elements dans la table Offers ayant $id comme ID_O
        $studentModel->delete($id);

        $this->smarty->display('details/s_s.tpl');
        
    }

    public function delete(){
        $personModel = new PersonModel;
        
    }


}

    



