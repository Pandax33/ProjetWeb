<?php
namespace App\Models;

class WishlistModel extends Model
{
    protected $ID_P ;
    protected $ID_O;

    
    public function __construct()
    {

        $this->table = "wishlist";  
        $this->IdCollumName= "ID_P"; 
        $this->Collumdeux = "ID_O";
           
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

    public function setIdP($IdP)
    {
        $this->ID_P = $IdP;

        return $this;
    }

    public function getIdP()
    {
        return $this->ID_P;
    }
}
