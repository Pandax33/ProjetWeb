<?php
namespace App\Models;

class LocateModel extends Model
{
    protected $ID_E;
    protected $Name;

    
    public function __construct()
    {

        $this->table = "locate";  
        $this->IdCollumName= "ID_E"; 
        $this->Collumdeux= "Name";
    }

    public function getNameLocate()
    {
        return $this->Name;
    }

    public function setNameLocate($nameCity)
    {
        $this->Name = $nameCity;

        return $this;
    }

    public function getIdE()
    {
        return $this->ID_E;
    }

    public function setIdE($ID_E)
    {
        $this->ID_E = $ID_E;

        return $this;
    }
}
?>