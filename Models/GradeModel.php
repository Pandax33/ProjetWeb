<?php
namespace App\Models;

class GradeModel extends Model
{
    protected $ID_E;
    protected $ID_P;
    protected $Note;

    
    public function __construct()
    {

        $this->table = "grade";  
        $this->IdCollumName= "ID_E"; 
    }

    public function getIdE()
    {
        return $this->ID_E; 
    }

    public function setNameCity($ID_E)
    {
        $this->ID_E = $ID_E;

        return $this;
    }

    public function getIdP()
    {
        return $this->ID_P;
    }

    public function setIdP($ID_P)
    {
        $this->ID_P = $ID_P;

        return $this;
    }

    public function getNote()
    {
        return $this->Note;
    }

    public function setNote($Note)
    {
        $this->Note = $Note;

        return $this;
    }

    ##Ajout requete pour moyenne des notes
}
?>