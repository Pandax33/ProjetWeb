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

class teachersController extends Controller
{
    //lister les étudiants de la bdd
    public function index()
    {
        if($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'teacher'){
        //On instancie le modèle correspondant à la table teachers
        $teacherModel = new PersonModel;


        $teachers = $teacherModel->findBy(['Role_P' => 'teacher']);
        $this ->smarty->assign('role', $_SESSION['role']);
        $this->smarty->assign('myArray', $teachers);
        $this->smarty->display('teachers.tpl');

        }
        else{
            // On redirige vers la page de connexion
            $this->smarty->assign('role', $_SESSION['role']);
            $this ->smarty->assign('identifiant', $_SESSION['identifiant'] );
            $this->smarty->display('error403.tpl');
           
        }
    }

    // Afficher une annonce

    public function detail(int $id){
        // On instancie le modèle
        $teacherModel = new PersonModel;

        // On récupère l'étudiant
        $teacher = $teacherModel->find($id);

        // On affiche la vue
        $this->render('teachers/detail', ['teacher' => $teacher]);
    }

    public function suppr(int $id){
        $teacherModel = new PersonModel;

        //Supprimer les elements dans la table Offers ayant $id comme ID_O
        $teacherModel->delete($id);

        $this->smarty->display('details/s_t.tpl');
        
    }

    public function modifier(){
        $teacherModel=new PersonModel;
        $teachers=$teacherModel->findBy(['Role_P' => 'teacher']);
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
        foreach ($teachers as &$teacher) {
            if (isset($promotion_map[$teacher->ID_P])) {
                $teacher->Promotions = implode(", ", $promotion_map[$teacher->ID_P]);
            } else {
                $teacher->Promotions = "";
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
    foreach ($teachers as &$teacher) {
        if (isset($competence_map[$teacher->ID_P])) {
            $teacher->Competences = implode(", ", $competence_map[$teacher->ID_P]);
        } else {
            $teacher->Competences = "";
        }
}

        $this->smarty->assign('teachers',$teachers );
        $this->smarty->assign('own', $Own);
        $this->smarty->assign('is', $Is);
        $this->smarty->assign('center', $centers);
        $this->smarty->assign('promotion', $promotions);
        $this->smarty->assign('competence', $competences);

        $this->smarty->display('TemplateEditteacher.tpl');
      
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
        $Is=$IsModel->findAll();
        $selectedPromotions = $_POST['Promotion'];
        
        $idP = $personModel->getID_P();
        
        // Créez un tableau des noms de promotions dans Is pour l'ID_P spécifié
        $existingPromotions = [];
        foreach ($Is as $is) {
            if ($is->ID_P == $idP) {
                array_push($existingPromotions, $is->Name_Promotion);
            }
        }
        
        foreach ($selectedPromotions as $promotion) {
            // Recherche de la promotion sélectionnée dans le tableau Is
            $found = false;
            foreach ($Is as $is) {
                if ($is->Name_Promotion == $promotion && $is->ID_P == $idP) {
                    $found = true;
                    break;
                }
            }
        
            if (!$found) {
             
                $IsModel->setIdP($idP);
                $IsModel->setNamePromotion($promotion);
                $IsModel->create($IsModel);
            } else {
       
            }
        }
        
        // Trouvez les promotions qui sont dans existingPromotions mais pas dans selectedPromotions
        $missingPromotions = array_diff($existingPromotions, $selectedPromotions);
        
        // Affichez les promotions manquantes
        foreach ($missingPromotions as $missingPromotion) {
          
            $IsModel->deletePrecis($idP, $missingPromotion);
        }
        
        

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
   

        

    $this ->smarty->display('details/m_t.tpl');
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
        $this->smarty->display('TemplateCreateteacher.tpl');

       
        
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
        $personModel->setRole_P('teacher');
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
        $Is=$_POST['Promotion'];
        foreach ($Is as $is) {
        $IsModel->setIdP($foundId);
        $IsModel->setNamePromotion($is);
        $IsModel->create($IsModel);}

        

        $OwnModel=new OwnModel;
        $Own=$_POST['competence'];
        foreach ($Own as $own) {
            
            $OwnModel->setIdP($foundId);
            $OwnModel->setNameCompetence($own);
            
            $OwnModel->create($OwnModel);
       ;
        }
        $this ->smarty->display('details/c_t.tpl');
    }


}