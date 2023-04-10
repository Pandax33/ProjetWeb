<?php
namespace App\Models;

class CompetenceModel extends Model
{
    protected $Name_Competence;

    
    public function __construct()
    {

        $this->table = "competence";  
        $this->IdCollumName= "Name_Competence"; 
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