<?php
namespace App\Models;

class CenterModel extends Model
{
    protected $nameCenter;

    
    public function __construct()
    {

        $this->table = "center";  
        $this->IdCollumName= "Name_Center"; 
    }

    public function getNameCenter()
    {
        return $this->nameCenter;
    }

    public function setNameCenter($nameCenter)
    {
        $this->nameCenter = $nameCenter;

        return $this;
    }
}
?>