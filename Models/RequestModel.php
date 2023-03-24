<?php
namespace App\Models;

class RequestModel extends Model
{
    protected $ID_O;
    protected $Name_Competence;

    
    public function __construct()
    {

        $this->table = "request";  
        $this->IdCollumName= "ID_O"; 
    }

    public function getIdO()
    {
        return $this->ID_O;
    }

    public function setIdO($IdO)
    {
        $this->ID_O = $IdO;

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