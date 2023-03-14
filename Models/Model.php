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

//CREATE
    public function create(Model $model)
    {
        //Insert into offers (entitled, duration, date_publish , salary, space_available, state, description) values (?, ?, ?, ?, ?, ?, )?
        $champs = [];
        $inter = [];
        $valeurs = [];

    // On boucle pour "éclater le tableau"
    foreach($model as $champ => $valeur)
    {
        if($valeur !== null && $champ != 'table' && $champ != 'db'){
        $champs[] = $champ;
        $inter[] = "?";
        $valeurs[]= $valeur;
        }
    }
    $liste_champs = implode(', ', $champs);
    $liste_inter = implode(', ', $inter);

    
    // On exécute la requête
    return $this->requete("INSERT INTO {$this->table} ($liste_champs) VALUES ($liste_inter)", $valeurs);
    }

//UPDATE
    public function update(int $id, Model $model)
    {
        //update offers set entitled = ?, duration = ?, date_publish = ?, salary = ?, space_available = ?, state = ?, description = ? where id = ?
        $champs = [];
        $valeurs = [];

    // On boucle pour "éclater le tableau"
    foreach($model as $champ => $valeur)
    {
        if($valeur !== null && $champ != 'table' && $champ != 'db'){
        $champs[] = "$champ = ?";
        $valeurs[]= $valeur;
        }
    }
    $valeurs[] = $id;
    $liste_champs = implode(', ', $champs);

    
    // On exécute la requête
    return $this->requete("UPDATE {$this->table} SET $liste_champs WHERE id = ?", $valeurs );
    } 

//DELETE
    public function delete(int $id)
    {
    // DELETE FROM offers WHERE id = ?
    return $this->requete("DELETE FROM {$this->table} WHERE id = ?", [$id]);
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


    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            // On récupère le nom du setter correspondant à la clé
            $setter = 'set'.ucfirst($key);

            // Si le setter correspondant existe
            if (method_exists($this, $setter))
            {
                // On appelle le setter
                $this->$setter($value);
            }
        }
        return $this;
    }

}