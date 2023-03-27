<?php
namespace App\Models;

class ConcernModel extends Model
{
    protected $Name_Promotion;
    protected $ID_O;

    
    public function __construct()
    {

        $this->table = "concern";  
        $this->Collumdeux= "Name_Promotion";
        $this->IdCollumName = "ID_O"; 
    }

    public function getNamePromotion()
    {
        return $this->Name_Promotion;
    }

    public function setNamePromotion($namePromotion)
    {
        $this->Name_Promotion = $namePromotion;

        return $this;
    }

    public function getIdO()
    {
        return $this->ID_O;
    }

    public function setIdO($idO)
    {
        $this->ID_O = $idO;

        return $this;
    }

    public function setIdCollumToNamePromotion()
    {
        $this->IdCollumName = "Name_Promotion";
    }

    public function setIdCollumToIdO()
    {
        $this->IdCollumName = "ID_O";
    }
}
?>