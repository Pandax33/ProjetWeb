<?php 
// PERMET DE CONSULTER LA LISTE DES ANNONCES
namespace App\Controllers;
use App\Models\ConcernModel;
use App\Models\EnterpriseModel;
use App\Models\OffersModel;
use App\Models\CityModel;
use App\Models\RequestModel;
Use App\Models\PromotionModel;
Use App\Models\CompetenceModel;
use App\Models\WishlistModel;


class OffersController extends Controller
{
    //lister les annonces de la bdd
    public function index()
    {
        //On instancie le modele coresspondant a la table offers
        $offersModel = new OffersModel;
        $enterpriseModel = new EnterpriseModel;
        $wishlistModel = new WishlistModel;

        //On recupere les annonces de la bdd 
//Si le role est student, on affiche seulement les offres publiées avec un FindBy
//Si le role est admin ou teacher, on affiche toutes les offres avec un FindAll
        if($_SESSION['role'] == 'student'){
            $offers = $offersModel->findBy(['state' => 1]);
        }else{
            $offers = $offersModel->findAll();
        }

        $enterprises = $enterpriseModel->findAll();
        $wishlist = $wishlistModel->findAll();

        $new_offers = array();

foreach ($offers as $offer) {
    $new_offer = clone $offer; // Cloner l'objet pour éviter de modifier l'original
    $id_e = $offer->ID_E;
    $id_o = $offer->ID_O;
    
    // Trouver l'entreprise correspondante
    $enterprise_name = "";
 // On verifie si il existe une association entre l'offre et l'id de la personne connectée
 // Si oui, on ajoute un attribut "wish" à l'objet $new_offer pour pouvoir afficher le bouton "Ajouter à la wishlist"
    foreach ($wishlist as $wish) {
        if ($wish->ID_O == $id_o && $wish->ID_P == $_SESSION['identifiant']) {
            $new_offer->wish = 1;
            break;
        }else{
            $new_offer->wish = 0;
        }
    }
    foreach ($enterprises as $enterprise) {
        if ($enterprise->ID_E == $id_e) {
            $enterprise_name = $enterprise->Name_E;
            break;
        }
    }

    

    $new_offer->ent = $enterprise_name;
    $new_offers[] = $new_offer;

}


        
        $this->smarty->assign('role', $_SESSION['role']);
        $this->smarty->assign('myArray', $new_offers);
        $this->smarty->assign('Nom','Liste des offres');
        $this->smarty->display('offers.tpl');

    }

    public function list(int $id)
    {
         //On instancie le modele coresspondant a la table offers
         $offersModel = new OffersModel;
         $enterpriseModel = new EnterpriseModel;
         $wishlistModel = new WishlistModel;
 
         //On recupere les annonces de la bdd 
 //Si le role est student, on affiche seulement les offres publiées avec un FindBy
 //Si le role est admin ou teacher, on affiche toutes les offres avec un FindAll
 if($_SESSION['role'] == 'student'){
    $offers = $offersModel->findBy(['state' => 1,'ID_E' => $id]);
}else{
    $offers = $offersModel->findBy(['ID_E' => $id]);
}
    
 
         $enterprises = $enterpriseModel->findAll();
         $wishlist = $wishlistModel->findAll();
 
         $new_offers = array();
 
 foreach ($offers as $offer) {
     $new_offer = clone $offer; // Cloner l'objet pour éviter de modifier l'original
     $id_e = $offer->ID_E;
     $id_o = $offer->ID_O;
     
     // Trouver l'entreprise correspondante
     $enterprise_name = "";
  // On verifie si il existe une association entre l'offre et l'id de la personne connectée
  // Si oui, on ajoute un attribut "wish" à l'objet $new_offer pour pouvoir afficher le bouton "Ajouter à la wishlist"
     foreach ($wishlist as $wish) {
         if ($wish->ID_O == $id_o && $wish->ID_P == $_SESSION['identifiant']) {
             $new_offer->wish = 1;
             break;
         }else{
             $new_offer->wish = 0;
         }
     }
     foreach ($enterprises as $enterprise) {
         if ($enterprise->ID_E == $id_e) {
             $enterprise_name = $enterprise->Name_E;
             break;
         }
     }
 
     
 
     $new_offer->ent = $enterprise_name;
     $new_offers[] = $new_offer;
 
 }
 
 
         
         $this->smarty->assign('role', $_SESSION['role']);
         $this->smarty->assign('myArray', $new_offers);
         $this->smarty->assign('Nom','Liste des offres');
         $this->smarty->display('offers.tpl');

    }

    // Afficher une annonce
    public function detail(int $id){
        // On instancie le modèle
        $offersModel = new OffersModel;
        $enterpriseModel = new EnterpriseModel;
        $wishlistModel = new WishlistModel;
        $requestModel = new RequestModel;

        // On récupère l'annonce
        $offer = $offersModel->find($id);

        //On recupere l'entreprise correspondante et on l'ajoute à l'objet $offer
        //On verifie si il existe une association entre l'offre et l'id de la personne connectée
        //Si oui, on ajoute un attribut "wish" à l'objet $offer pour pouvoir afficher le bouton "Ajouter à la wishlist"
        $enterprise = $enterpriseModel->find($offer->ID_E);
        $offer->ent = $enterprise->Name_E;
        $wishlist = $wishlistModel->findBy(['ID_O' => $id, 'ID_P' => $_SESSION['identifiant']]);
        // Parcourir la table request contenant les compétences requise a une offre pour ajouter un ou plusieurs attribut à l'objet $offer
        $request = $requestModel->findBy(['ID_O' => $id]);
        foreach ($request as $req) {
            // On ajoute une seule liste d'attributs à l'objet $offer avec chaque compétence requise 
            $offer->req[] = $req->Name_Competence;
        }

        




        if(empty($wishlist)){
            $offer->wish = 0;
        }else{
            $offer->wish = 1;
        }

        

        // On affiche la vue
        $this->smarty->assign('offer', $offer);
        $this->smarty->assign('role', $_SESSION['role']);
        $this->smarty->assign('Nom',"Détails de l'offre");
        $this->smarty->display('details/offre.tpl');
    }

    // Afficher le formulaire de création d'une annonce
    public function cree(){

        $enterpriseModel= New EnterpriseModel;
        $enterprise=$enterpriseModel->findAll();
        $cityModel= new CityModel;
        $city=$cityModel->findAll();
        $competence= new CompetenceModel;
        $competence=$competence->findAll();
        $promotion= new PromotionModel;
        $promotion=$promotion->findAll();
        $this->smarty->assign('promotion',$promotion);
        $this->smarty->assign('competence',$competence);

        $this->smarty->assign('enterprise',$enterprise);
        $this->smarty->assign('city', $city);
        $this->smarty->display('TemplateCreateOffers.tpl');
    }

    public function create(){
        $offersModel = new OffersModel;

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

        $offersModel->setEntitled_O($_POST['Intitule']);
        $offersModel->setDuration_O($_POST['Duree']);
        $offersModel->setSalary_O($_POST['Salaire']);
        $offersModel->setDescription($_POST['description']);
        $offersModel->setLinkPicture(basename($_FILES["image"]["name"]));
        $offersModel->setSpace_O($_POST['nbStagiaire']);
        $offersModel->setIde($_POST['ID']);
        $offersModel->setName($_POST['Lieux']);
        if($_POST['visible']== "visible"){
            $offersModel->setState(1);}
        else{
            $offersModel->setState(0);
        }
        $offersModel->create($offersModel);

        $foundId = null;

// Récupérer les valeurs de getFirstName et getLastName
$firstNameToCompare = $offersModel->getEntitled_O();


// Parcourir le tableau des résultats à partir de la fin
for ($i = count($offersModel->findAll()) - 1; $i >= 0; $i--) {
    $Offers = $offersModel->findAll()[$i];

    // Comparer les FirstName et LastName avec les valeurs de getFirstName et getLastName
    if ($Offers->Entitled_O === $firstNameToCompare) {
        $foundId = $Offers->ID_O;
        break;
    }
}


        $IsModel=new ConcernModel;
        $Is=$_POST['Promotion'];
        foreach ($Is as $is) {
        $IsModel->setIdO($foundId);
        $IsModel->setNamePromotion($is);
        $IsModel->create($IsModel);}

        

        $OwnModel=new RequestModel;
        $Own=$_POST['competence'];
        foreach ($Own as $own) {
            
            $OwnModel->setIdO($foundId);
            $OwnModel->setNameCompetence($own);
            echo $OwnModel->getIdO();
            echo $OwnModel->getNameCompetence();
            $OwnModel->create($OwnModel);
            echo '</br>';
        }
        
        
        
    }

    public function modifier(){
        $enterpriseModel= New EnterpriseModel;
        $enterpriseSend=$enterpriseModel->findAll();
        $cityModel= new CityModel;
        $city=$cityModel->findAll();
        $offersModel = new OffersModel;
        $offers=$offersModel->findAll();
        $RequestModel= new RequestModel;
        $Request=$RequestModel->findAll();
        $ConcernModel= new ConcernModel;
        $Concern=$ConcernModel->findAll();
        $PromotionModel= New PromotionModel;
        $Promotion=$PromotionModel->findAll();
        $CompetenceModel= new CompetenceModel;
        $Competence=$CompetenceModel->findAll();

        $requestModel = new RequestModel;
$request = $requestModel->findAll();

// Création d'un tableau de correspondance entre les ID_O et les noms de compétences
$competence_map = [];
foreach ($request as $req) {
    if (!isset($competence_map[$req->ID_O])) {
        $competence_map[$req->ID_O] = [];
    }
    array_push($competence_map[$req->ID_O], $req->Name_Competence);
}

// Ajout des noms de compétences à chaque offre
foreach ($offers as &$offer) {
    if (isset($competence_map[$offer->ID_O])) {
        $offer->Competences = implode(", ", $competence_map[$offer->ID_O]);
    } else {
        $offer->Competences = "";
    }
}
// Récupération de toutes les associations Concern
$ConcernModel = new ConcernModel;
$Concern = $ConcernModel->findAll();

// Création d'une map pour associer les noms de promotion à chaque offre
$promotion_map = array();
foreach ($Concern as $concern) {
    if (!isset($promotion_map[$concern->ID_O])) {
        $promotion_map[$concern->ID_O] = array();
    }
    array_push($promotion_map[$concern->ID_O], $concern->Name_Promotion);
}

// Ajout des noms de promotion à chaque offre
foreach ($offers as &$offer) {
    if (isset($promotion_map[$offer->ID_O])) {
        $offer->Promotions = implode(", ", $promotion_map[$offer->ID_O]);
    } else {
        $offer->Promotions = "";
    }
}
$EnterpriseModel = new EnterpriseModel;
$Enterprises = $EnterpriseModel->findAll();

// Création d'une map pour associer les noms d'entreprise à chaque ID_E
$enterprise_map = array();
foreach ($Enterprises as $enterprise) {
    $enterprise_map[$enterprise->ID_E] = $enterprise->Name_E;
}

// Ajout des noms de promotion et d'entreprise à chaque offre
foreach ($offers as &$offer) {
    if (isset($promotion_map[$offer->ID_O])) {
        $offer->Promotions = implode(", ", $promotion_map[$offer->ID_O]);
    } else {
        $offer->Promotions = "";
    }
    if (isset($enterprise_map[$offer->ID_E])) {
        $offer->Name_E = $enterprise_map[$offer->ID_E];
    } else {
        $offer->Name_E = "";
    }
}

        $this->smarty->assign('Concern',$Concern);
        $this->smarty->assign('Request',$Request);
        $this->smarty->assign('enterprise',$enterpriseSend);
        $this->smarty->assign('city', $city);
        $this->smarty->assign('offers',$offers);
        $this->smarty->assign('Promotion',$Promotion);
        $this->smarty->assign('Competence',$Competence);
        $this->smarty->display('TemplateEditOffers.tpl');
       
    }

    public function update(){
         $offersModel = new OffersModel;

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
        $offersModel->setId($_POST['IDO']);
        echo $offersModel->getId();
        $offersModel->setEntitled_O($_POST['Intitule']);
        $offersModel->setDuration_O($_POST['Duree']);
        $offersModel->setSalary_O($_POST['Salaire']);
        $offersModel->setDescription($_POST['description']);
        $offersModel->setLinkPicture(basename($_FILES["image"]["name"]));
        $offersModel->setSpace_O($_POST['nbStagiaire']);
        $offersModel->setIde($_POST['ID']);
        $offersModel->setName($_POST['Lieux']);
        if($_POST['visible']== "visible"){
            $offersModel->setState(1);}
        else{
            $offersModel->setState(0);
        }

        $offersModel->update($offersModel->getId(), $offersModel);
        
        $IsModel=new ConcernModel;
        $Is=$IsModel->findAll();
        $selectedPromotions = $_POST['Promotion'];
        
        $idP = $offersModel->getId();
        
        // Créez un tableau des noms de promotions dans Is pour l'ID_P spécifié
        $existingPromotions = [];
        foreach ($Is as $is) {
            if ($is->ID_O == $idP) {
                array_push($existingPromotions, $is->Name_Promotion);
            }
        }
        
        foreach ($selectedPromotions as $promotion) {
            // Recherche de la promotion sélectionnée dans le tableau Is
            $found = false;
            foreach ($Is as $is) {
                if ($is->Name_Promotion == $promotion && $is->ID_O == $idP) {
                    $found = true;
                    break;
                }
            }
        
            if (!$found) {
                echo "Promotion sélectionnée non trouvée ou ID_P différent: " . htmlspecialchars($promotion) . "<br>";
                $IsModel->setIdO($idP);
                $IsModel->setNamePromotion($promotion);
                $IsModel->create($IsModel);
            } else {
                echo "Promotion sélectionnée trouvée et ID_P correspondant: " . htmlspecialchars($promotion) . "<br>";
            }
        }
        
        // Trouvez les promotions qui sont dans existingPromotions mais pas dans selectedPromotions
        $missingPromotions = array_diff($existingPromotions, $selectedPromotions);
        
        // Affichez les promotions manquantes
        foreach ($missingPromotions as $missingPromotion) {
            echo "Promotion présente dans Is mais pas dans le retour de promotions : " . htmlspecialchars($missingPromotion) . "<br>";
            $IsModel->deletePrecis($idP,$missingPromotion);
        }

        $OwnModel=new RequestModel;
        $Own=$OwnModel->findAll();

        // On récupère les compétences sélectionnées à partir du formulaire
$selectedCompetences = $_POST['competence'];
$idP = $offersModel->getId();

// Créez un tableau des noms de compétences dans Own pour l'ID_P spécifié
$existingCompetences = [];
foreach ($Own as $own) {
    if ($own->ID_O == $idP) {
        array_push($existingCompetences, $own->Name_Competence);
    }
}

foreach ($selectedCompetences as $competence) {
    // Recherche de la compétence sélectionnée dans le tableau Own
    $found = false;
    foreach ($Own as $own) {
        if ($own->Name_Competence == $competence && $own->ID_O == $idP) {
            $found = true;
            break;
        }
    }

    if (!$found) {
        echo "Compétence sélectionnée non trouvée ou ID_P différent: " . htmlspecialchars($competence) . "<br>";
        $OwnModel->setIdO($idP);
        $OwnModel->setNameCompetence($competence);
        $OwnModel->create($OwnModel);
    } else {
        echo "Compétence sélectionnée trouvée et ID_P correspondant: " . htmlspecialchars($competence) . "<br>";
    }
    }
    
    // Trouvez les compétences qui sont dans existingCompetences mais pas dans selectedCompetences
    $missingCompetences = array_diff($existingCompetences, $selectedCompetences);
    
    // Affichez les compétences manquantes
    foreach ($missingCompetences as $missingCompetence) {
    echo "Compétence présente dans Own mais pas dans le retour de compétences : " . htmlspecialchars($missingCompetence) . "<br>";
    $OwnModel->deletePrecis($idP, $missingCompetence);
    }


    }


    
    //ajouter à la wishlist
    public function addWishlist(int $id){
        // On instancie le modèle
        //On verifie dans la bdd si l'offre est deja dans la wishlist avec un findby
        $wishlistModel = new WishlistModel;
        $wishlist = $wishlistModel->findBy(['ID_O' => $id, 'ID_P' => $_SESSION['identifiant']]);
        //Si l'offre n'est pas dans la wishlist, on l'ajoute
        if(empty($wishlist)){
            $wishlistModel = new WishlistModel;
            $wishlistModel -> setIdP($_SESSION['identifiant']);
            $wishlistModel -> setIdO($id);
            $wishlistModel -> create($wishlistModel);
            header('Location: /public/index.php?p=offers');
        }else{
            header('Location: /public/index.php?p=offers');
        }

       
    }

    //supprimer de la wishlist
    public function removeWishlist(int $id){
        // On instancie le modèle
        $wishlistModel = new WishlistModel;
        $wishlist = $wishlistModel->findBy(['ID_O' => $id, 'ID_P' => $_SESSION['identifiant']]);
        //Si l'offre est dans la wishlist, on la supprime
        if(!empty($wishlist)){
            $wishlistModel = new WishlistModel;

            
            $wishlistModel -> deletePrecis($_SESSION['identifiant'], $id );
            header('Location: /public/index.php?p=offers');
            
        }else{
            // Actualiser la page
            header('Location: /public/index.php?p=offers');
        }

       
    }

    public function postuler(int $id){
        $offersModel = new OffersModel;
        $enterpriseModel = new EnterpriseModel;
        $wishlistModel = new WishlistModel;

        // On récupère l'annonce
        $offer = $offersModel->find($id);

        //On recupere l'entreprise correspondante et on l'ajoute à l'objet $offer
        //On verifie si il existe une association entre l'offre et l'id de la personne connectée
        //Si oui, on ajoute un attribut "wish" à l'objet $offer pour pouvoir afficher le bouton "Ajouter à la wishlist"
        $enterprise = $enterpriseModel->find($offer->ID_E);
        $offer->ent = $enterprise->Name_E;
        $wishlist = $wishlistModel->findBy(['ID_O' => $id, 'ID_P' => $_SESSION['identifiant']]);
        if(empty($wishlist)){
            $offer->wish = 0;
        }else{
            $offer->wish = 1;
        }

        $this->smarty->assign('offer', $offer);
        $this->smarty->assign('role', $_SESSION['role']);
        $this->smarty->display('postuler.tpl');
    }

    public function apply(int $id){
        $offersModel = new OffersModel;
        $enterpriseModel = new EnterpriseModel;
        $wishlistModel = new WishlistModel;

        // On récupère l'annonce
        $offer = $offersModel->find($id);

        //On recupere l'entreprise correspondante et on l'ajoute à l'objet $offer
        //On verifie si il existe une association entre l'offre et l'id de la personne connectée
        //Si oui, on ajoute un attribut "wish" à l'objet $offer pour pouvoir afficher le bouton "Ajouter à la wishlist"
        $enterprise = $enterpriseModel->find($offer->ID_E);
        $offer->ent = $enterprise->Name_E;
        $wishlist = $wishlistModel->findBy(['ID_O' => $id, 'ID_P' => $_SESSION['identifiant']]);
        if(empty($wishlist)){
            $offer->wish = 0;
        }else{
            $offer->wish = 1;
        }

        $this->smarty->assign('offer', $offer);
        $this->smarty->assign('role', $_SESSION['role']);
        $this->smarty->display('apply.tpl');

    }

    public function suppr(int $id){
        $offersModel = new OffersModel;
        $requestModel = new RequestModel;
        $wishlistModel = new WishlistModel;
        $concernModel = new ConcernModel;
        

        $concern = $concernModel->findBy(['ID_O' => $id]);
        //Parcourir les elements de la table Concern ayant $id comme ID_O
        foreach($concern as $con){
            //Supprimer les elements dans la table Concern ayant $con->ID_C comme ID_C
            $concernModel->deletePrecis($id, $con);
        }

        $wishlist = $wishlistModel->findBy(['ID_O' => $id]);
        //Parcourir les elements de la table Wishlist ayant $id comme ID_O
        foreach($wishlist as $wish){
            //Supprimer les elements dans la table Concern ayant $wish->ID_W comme ID_W
            $concernModel->deletePrecis($id, $wish);
        }

        $request = $requestModel->findBy(['ID_O' => $id]);
        //Parcourir les elements de la table Request ayant $id comme ID_O
        foreach($request as $req){
            //Supprimer les elements dans la table Concern ayant $req->ID_R comme ID_R
            $concernModel->deletePrecis($id, $req);
        }


        //Supprimer les elements dans la table Offers ayant $id comme ID_O
        $offersModel->delete($id);


        header('Location: /public/index.php?p=offers');
        
    }

    public function ville(string $ville)
    {
         //On instancie le modele coresspondant a la table offers
         $offersModel = new OffersModel;
         $enterpriseModel = new EnterpriseModel;
         $wishlistModel = new WishlistModel;
 
         //On recupere les annonces de la bdd 
 //Si le role est student, on affiche seulement les offres publiées avec un FindBy
 //Si le role est admin ou teacher, on affiche toutes les offres avec un FindAll
 if($_SESSION['role'] == 'student'){
    $offers = $offersModel->findBy(['state' => 1, 'Name' => $ville]);
}else{
    $offers = $offersModel->findBy(['Name' => $ville]);
}
 
         $enterprises = $enterpriseModel->findAll();
         $wishlist = $wishlistModel->findAll();
 
         $new_offers = array();
 
 foreach ($offers as $offer) {
     $new_offer = clone $offer; // Cloner l'objet pour éviter de modifier l'original
     $id_e = $offer->ID_E;
     $id_o = $offer->ID_O;
     
     // Trouver l'entreprise correspondante
     $enterprise_name = "";
  // On verifie si il existe une association entre l'offre et l'id de la personne connectée
  // Si oui, on ajoute un attribut "wish" à l'objet $new_offer pour pouvoir afficher le bouton "Ajouter à la wishlist"
     foreach ($wishlist as $wish) {
         if ($wish->ID_O == $id_o && $wish->ID_P == $_SESSION['identifiant']) {
             $new_offer->wish = 1;
             break;
         }else{
             $new_offer->wish = 0;
         }
     }
     foreach ($enterprises as $enterprise) {
         if ($enterprise->ID_E == $id_e) {
             $enterprise_name = $enterprise->Name_E;
             break;
         }
     }
 
     
 
     $new_offer->ent = $enterprise_name;
     $new_offers[] = $new_offer;
 
 }
 
 
         
         $this->smarty->assign('role', $_SESSION['role']);
         $this->smarty->assign('myArray', $new_offers);
         $this->smarty->assign('Nom','Liste des offres');
         $this->smarty->display('offers.tpl');

    }

}