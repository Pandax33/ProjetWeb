<?php
namespace App\Models;

class OffersModel extends Model
{
    protected $ID_O;
    protected $Entitled_O;
    protected $Duration_O;
    protected $Salary_O;
    protected $date_publish;
    protected $Space_O;
    protected $State;
    protected $Description;
    protected $LinkPicture;

    protected $Name;
    protected $ID_E;
    
    public function __construct()
    {

        $this->table = "offers";  
        $this->IdCollumName="ID_O";
    }


    /**
     * Get the value of Description
     */ 
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Set the value of Description
     *
     * @return  self
     */ 
    public function setDescription($Description)
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * Get the value of State
     */ 
    public function getState()
    {
        return $this->State;
    }

    /**
     * Set the value of State
     *
     * @return  self
     */ 
    public function setState($State)
    {
        $this->State = $State;

        return $this;
    }

    /**
     * Get the value of Space_O
     */ 
    public function getSpace_O()
    {
        return $this->Space_O;
    }

    /**
     * Set the value of Space_O
     *
     * @return  self
     */ 
    public function setSpace_O($Space_O)
    {
        $this->Space_O = $Space_O;

        return $this;
    }

    /**
     * Get the value of date_publish
     */ 
    public function getDate_publish()
    {
        return $this->date_publish;
    }

    /**
     * Set the value of date_publish
     *
     * @return  self
     */ 
    public function setDate_publish($date_publish)
    {
        $this->date_publish = $date_publish;

        return $this;
    }

    /**
     * Get the value of Salary_O
     */ 
    public function getSalary_O()
    {
        return $this->Salary_O;
    }

    /**
     * Set the value of Salary_O
     *
     * @return  self
     */ 
    public function setSalary_O($Salary_O)
    {
        $this->Salary_O = $Salary_O;

        return $this;
    }

    /**
     * Get the value of Duration_O
     */ 
    public function getDuration_O()
    {
        return $this->Duration_O;
    }

    /**
     * Set the value of Duration_O
     *
     * @return  self
     */ 
    public function setDuration_O($Duration_O)
    {
        $this->Duration_O = $Duration_O;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->ID_O;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->ID_O = $id;

        return $this;
    }

    /**
     * Get the value of Entitled_O
     */ 
    public function getEntitled_O()
    {
        return $this->Entitled_O;
    }

    /**
     * Set the value of Entitled_O
     *
     * @return  self
     */ 
    public function setEntitled_O($Entitled_O)
    {
        $this->Entitled_O = $Entitled_O;

        return $this;
    }

    public function getLinkPicture()
    {
        return $this->LinkPicture;
    }

    public function setLinkPicture($LinkPicture)
    {
        $this->LinkPicture = $LinkPicture;
        return $this;
    }

    public function getName()
    {
        return $this->Name;
    }

    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
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
}
