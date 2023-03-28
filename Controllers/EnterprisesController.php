<?php 
// PERMET DE CONSULTER LA LISTE DES Entreprises
namespace App\Controllers;
use App\Models\EnterpriseModel;
use App\Models\LocateModel;
use App\Models\CityModel;
use App\Models\OffersModel;


class EnterprisesController extends Controller
{
    //lister les entreprises de la bdd
    public function index()
    {
        //On instancie le modele coresspondant a la table enterprises
        $enterpriseModel = new EnterpriseModel;
        $array = array(0, 1, 2);
        //On recupere les entreprises de la bdd 
        $enterprises = $enterpriseModel->findBy(['Visibility_E' => 1]);;
        
        $this->smarty->assign('role', $_SESSION['role']);
        $this->smarty->assign('myArray', $enterprises);
        $this->smarty->assign('array', $array);
        $this->smarty->assign('Nom','Liste des entreprises');
        $this->smarty->display('enterprises.tpl');

    }

    // Afficher une annonce
    public function detail(int $id){
        // On instancie le modèle
        $enterpriseModel = new EnterpriseModel;
        $locateModel= new LocateModel;
        $offersModel = new OffersModel;

        // On récupère l'entreprise
        $enterprise = $enterpriseModel->find($id);
        $locate= $locateModel->findBy(['ID_E' => $id]);
        $offers= $offersModel->findBy(['ID_E' => $id, 'state' => 1]);

        foreach ($locate as $loc) {
            $enterprise->loc[] = $loc->Name;
        }

        // On affiche la vu
        $this->smarty->assign('offres', $offers);
        $this->smarty->assign('entreprise', $enterprise);
        $this->smarty->assign('role', $_SESSION['role']);
        $this->smarty->assign('Nom',"Détails de l'offre");
        $this->smarty->display('details/enterprise.tpl');

    }

    public function modifier(){
        $enterpriseModel = new EnterpriseModel;
        $locateModel= new LocateModel;
        $cityModel= new CityModel;
        // On recupere les entreprises de la bdd
        $enterprises = $enterpriseModel->findAll();
        $locate= $locateModel->findAll();
        $city= $cityModel->findAll();
        
        // Création du tableau associatif pour relier l'ID_E aux noms de localités
        $localite_map = [];
        foreach ($locate as $loc) {
            if (!isset($localite_map[$loc->ID_E])) {
                $localite_map[$loc->ID_E] = [];
            }
            array_push($localite_map[$loc->ID_E], $loc->Name);
        }
    
        // Ajout des noms de localités à chaque entreprise
        foreach ($enterprises as &$enterprise) {
            if (isset($localite_map[$enterprise->ID_E])) {
                $enterprise->Localite = implode(", ", $localite_map[$enterprise->ID_E]);
            } else {
                $enterprise->Localite = "";
            }
        }
        
        $this->smarty->assign('entreprises', $enterprises);
        $this->smarty->assign('city', $city);
        $this->smarty->assign('locate', $locate);
        $this->smarty->display('TemplateEditEnterprise.tpl');
       
        
    }

    public function update(){
        $locateModel = new LocateModel;
        $locate= $locateModel->findAll();
        $enterpriseModel = new EnterpriseModel;
       
        $enterpriseModel->setIDE($_POST['ID']);
       
        $enterpriseModel->setNameE($_POST['Nom']);
        
        $enterpriseModel->setActivityE($_POST['activite']);
        $enterpriseModel->setDescription($_POST['description']);
        $enterpriseModel->setIntershipE($_POST['nbStagiaire']);
        if($_POST['visible']== "visible"){
            $enterpriseModel->setVisibilyE(true);
            
        }else{
            $enterpriseModel->setVisibilyE(false);
        }
        $enterpriseModel->setVisibilyE($_POST['visible']);
        $enterpriseModel->setTrustRateE($_POST['rating']);

        
        $enterpriseModel->update($enterpriseModel->getIDE(),$enterpriseModel);

        $selectedCitys = $_POST['citys'];
        $idE = $enterpriseModel->getIDE();

        // Créez un tableau des noms de villes dans locate pour l'ID_E spécifié
        $existingCitys = [];
        foreach ($locate as $loc) {
            if ($loc->ID_E == $idE) {
                array_push($existingCitys, $loc->Name);
            }
        }

        foreach ($selectedCitys as $city) {
            // Recherche de la ville sélectionnée dans le tableau locate
            $found = false;
            foreach ($locate as $loc) {
                if ($loc->Name == $city && $loc->ID_E == $idE) {
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                echo "Ville sélectionnée non trouvée ou IDE différent: " . htmlspecialchars($city) . "<br>";
                $locateModel->setIdE($idE);
                $locateModel->setNameLocate($city);
                $locateModel->create($locateModel);
            } else {
                echo "Ville sélectionnée trouvée et IDE correspondant: " . htmlspecialchars($city) . "<br>";
            }
        }

        // Trouvez les villes qui sont dans existingCitys mais pas dans selectedCitys
        $missingCitys = array_diff($existingCitys, $selectedCitys);

        // Affichez les villes manquantes
        foreach ($missingCitys as $missingCity) {
            echo "Ville présente dans locate mais pas dans le retour de city : " . htmlspecialchars($missingCity) . "<br>";
            $locateModel->deletePrecis($idE, $missingCity);
        }
        echo "Modification effectuée";
        echo $_POST['visible']; 
        
    }

    public function cree(){
        $cityModel= new CityModel;
        $city=$cityModel->findAll();
        $this->smarty->assign('city', $city);
        $this->smarty->display('TemplateCreateEnterprise.tpl');

    }

    public function create(){
        $locateModel = new LocateModel;
        $enterpriseModel = new EnterpriseModel;
        $test="oui";
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $test="non";
            $target_dir = "../Views/image/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
            // Vous pouvez ajouter des vérifications supplémentaires, par exemple vérifier la taille du fichier ou le type de fichier
        
            // Tentez de déplacer le fichier téléchargé vers le dossier de destination
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "L'image ". htmlspecialchars(basename($_FILES["image"]["name"])). " a été téléchargée.";
            } else {
                echo "Erreur lors du téléchargement de l'image.";
            }
        }


        $enterpriseModel->setLinkPicture(basename($_FILES["image"]["name"]));
        $enterpriseModel->setDescription($_POST['description']);
        $enterpriseModel->setNameE($_POST['Nom']);
        $enterpriseModel->setActivityE($_POST['activite']);
        $enterpriseModel->setIntershipE($_POST['nbStagiaire']);
        if($_POST['visible']== "visible"){
            $enterpriseModel->setVisibilyE(1);}
        else{
            $enterpriseModel->setVisibilyE(0);
        }
        $enterpriseModel->setVisibilyE($_POST['visible']);
        $enterpriseModel->setTrustRateE($_POST['rating']);
        $enterpriseModel->create($enterpriseModel);

        $selectedCitys = $_POST['citys'];

        $enterprise= $enterpriseModel->findAll();
        

        for ($i = count($enterprise) - 1; $i >= 0; $i--) {
            $entreprise = $enterprise[$i];
            if ($_POST['Nom'] === $entreprise->Name_E) {
              $selected_id = $entreprise->ID_E;
              break; // Sort de la boucle si le nom correspond
            }
          }

        $idE = $enterpriseModel->getIDE();

        foreach ($selectedCitys as $city) {
            // Recherche de la ville sélectionnée dans le tableau locate
            $locateModel->setIdE($selected_id);
            $locateModel->setNameLocate($city);
            $locateModel->create($locateModel);

            
            }

    }

}

