<?php
namespace App\Models;

class EnterpriseModel extends Model
{
    protected $ID_E;
    protected $Name_E;
    protected $Activity_E;
    protected $Intership_E;
    protected $Visibily_E;
    protected $TrustRate_E;
    
    
    public function __construct()
    {

        $this->table = "enterprise";  
        $this->IdCollumName="ID_E";

    }

    public function getIde()
    {
        return $this->ID_E;
    }

    public function setIde($ID_E)
    {
        $this->ID_E = $ID_E;
        return $this;
    }

    public function getNameE()
    {
        return $this->Name_E;
    }
    
    public function setNameE($Name_E)
    {
        $this->Name_E = $Name_E;
        return $this;
    }

    public function getActivityE()
    {
        return $this->Activity_E;
    }

    public function setActivityE($Activity_E)
    {
        $this->Activity_E = $Activity_E;
        return $this;
    }

    public function getIntershipE()
    {
        return $this->Intership_E;
    }

    public function setIntershipE($Intership_E)
    {
        $this->Intership_E = $Intership_E;
        return $this;
    }

    public function getVisibilyE()
    {
        return $this->Visibily_E;
    }

    public function setVisibilyE($Visibily_E)
    {
        $this->Visibily_E = $Visibily_E;
        return $this;
    }

    public function getTrustRateE()
    {
        return $this->TrustRate_E;
    }

    public function setTrustRateE($TrustRate_E)
    {
        $this->TrustRate_E = $TrustRate_E;
        return $this;
    }


}