<?php
namespace App\Models;

class CityModel extends Model
{
    protected $Name;

    
    public function __construct()
    {

        $this->table = "city";  
        $this->IdCollumName= "Name"; 
    }

    public function getNameCity()
    {
        return $this->Name;
    }

    public function setNameCity($nameCity)
    {
        $this->Name = $nameCity;

        return $this;
    }
}
?>