<?php
// indique qu'on est dans le dossier Models
namespace App\Models;

// On importe la classe Db
use App\Core\Db;

// On crée la classe Model qui hérite de Db
class Model extends Db
{
    // Table de la base de données
    protected $table;
    protected $IdCollumName;

    protected $Collumdeux;

    //Instance de Db
    private $db;

    public function findAll()
    {
        $query = $this->requete("SELECT * FROM {$this->table}");
        return $query->fetchAll();
    }

    public function moyenne($id)
    {
        return $this->requete("SELECT ROUND(AVG(note),1) AS moy FROM {$this->table} WHERE {$this->IdCollumName} = ?", [$id])->fetch();
        
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

    public function find($id)
    {
        return $this->requete("SELECT * FROM {$this->table} WHERE {$this->IdCollumName} = ?", [$id])->fetch();
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
        if($valeur !== null  && $champ != 'IdCollumName'  && $champ != 'Collumdeux' && $champ != 'table' && $champ != 'db'){
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
    public function update($id, Model $model)
    {
        //update offers set entitled = ?, duration = ?, date_publish = ?, salary = ?, space_available = ?, state = ?, description = ? where id = ?
        $champs = [];
        $valeurs = [];

    // On boucle pour "éclater le tableau"
    foreach($model as $champ => $valeur)
    {
        if($valeur !== null && $champ != 'table' && $champ != 'IdCollumName' && $champ != 'Collumdeux' && $champ != 'db'){
            $champs[] = "$champ = ?";

            // Convertir les booléens en entiers
            if (is_bool($valeur)) {
                $valeur = (int) $valeur;
            }

            $valeurs[]= $valeur;
        }
    }
    $valeurs[] = $id;
    $liste_champs = implode(', ', $champs);

    
    // On exécute la requête
    return $this->requete("UPDATE {$this->table} SET $liste_champs WHERE {$this->IdCollumName} = ?", $valeurs );
    } 

    public function updateN(int $id1, int $id2, int $note)
    {
    
    // On exécute la requête
    return $this->requete("UPDATE grade SET Note = $note WHERE ID_E = $id1 AND ID_P = $id2");
    } 

//DELETE
    public function delete(int $id)
    {
    // DELETE FROM offers WHERE id = ?
    return $this->requete("DELETE FROM {$this->table} WHERE {$this->IdCollumName} = ?", [$id]);
    }

    public function deletePrecis(int $id, $Param)
    {
        return $this->requete("DELETE FROM {$this->table} WHERE {$this->IdCollumName} = ? and {$this->Collumdeux} = ?", [$id,$Param]);
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
