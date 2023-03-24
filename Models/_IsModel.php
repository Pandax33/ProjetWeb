<?php
namespace App\Models;

class _IsModel extends Model
{
    protected $Name_Promotion;
    protected $ID_P;

    
    public function __construct()
    {

        $this->table = "_is";  
        $this->IdCollumName= "ID_P"; 
    }

    public function getNamePromotion()
    {
        return $this->Name_Promotion;
    }

    public function setNamePromotion($Name_Promotion)
    {
        $this->Name_Promotion = $Name_Promotion;

        return $this;
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
}
