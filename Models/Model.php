<?php
// indique qu'on est dans le dossier Models
namespace App\Models;

// On importe la classe Db
use App\Db\Db;

// On crée la classe Model qui hérite de Db
class Model extends Db
{
    // Table de la base de données
    protected $table;

    //Instance de Db
    private $db;

    public function findAll()
    {
        $query = $this->requete("SELECT * FROM {$this->table}");
        return $query->fetchAll();
    }

    public function findBy(array $criteres)
    {
    $champs = [];
    $valeurs = [];

    // On boucle pour "éclater le tableau"
    foreach($criteres as $champ => $valeur){
        $champs[] = "$champ = ?";
        $valeurs[]= $valeur;
    }
    
    // On transforme le tableau en chaîne de caractères séparée par des AND
    $liste_champs = implode(' AND ', $champs);

    // On exécute la requête
    return $this->requete("SELECT * FROM {$this->table} WHERE $liste_champs", $valeurs)->fetchAll();
    }

    public function find(int $id)
    {
        return $this->requete("SELECT * FROM {$this->table} WHERE id = ?", [$id])->fetch();
    }


    /**
    * Méthode qui exécutera les requêtes
    * @param string $sql Requête SQL à exécuter
    * @param array $attributes Attributs à ajouter à la requête 
    * @return PDOStatement|false 
    */
    public function requete(string $sql, array $attributs = null)
    {
    // On récupère l'instance de Db
    $this->db = Db::getInstance();

    // On vérifie si on a des attributs
    if($attributs !== null){
        // Requête préparée
        $query = $this->db->prepare($sql);
        $query->execute($attributs);
        return $query;
    }else{
        // Requête simple
        return $this->db->query($sql);
        }
    }
}
