<?php
namespace App\Models;

class OwnModel extends Model
{
    
    protected $ID_P;

    protected $Name_Competence;

    
    public function __construct()
    {

        $this->table = "own";  
        $this->IdCollumName= "Id_P"; 
        $this->Collumdeux= "Name_Competence";
    }

    public function getIdP()
    {
        return $this->ID_P;
    }

    public function setIdP($IdP)
    {
        $this->ID_P = $IdP;

        return $this;
    }

    public function getNameCompetence()
    {
        return $this->Name_Competence;
    }

    public function setNameCompetence($nameCompetence)
    {
        $this->Name_Competence = $nameCompetence;

        return $this;
    }
}
?>