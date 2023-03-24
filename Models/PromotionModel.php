<?php
namespace App\Models;

class PromotionModel extends Model
{
    protected $Name_Promotion;

    
    public function __construct()
    {

        $this->table = "promotion";  
        $this->IdCollumName= "Name_Promotion"; 
    }

    public function getPromotion()
    {
        return $this->Name_Promotion;
    }

    public function setPromotion($Promotion)
    {
        $this->Name_Promotion = $Promotion;

        return $this;
    }
}
?>