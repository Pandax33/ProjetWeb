<?php
namespace App\Models;

class OffersModel extends Model
{
    protected $id;
    protected $entitled;
    protected $duration;
    protected $salary;
    protected $date_publish;
    protected $space_available;
    protected $state;
    protected $description;
    
    public function __construct()
    {

        
        $this->table = "offers";
        
    }


    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of state
     */ 
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */ 
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the value of space_available
     */ 
    public function getSpace_available()
    {
        return $this->space_available;
    }

    /**
     * Set the value of space_available
     *
     * @return  self
     */ 
    public function setSpace_available($space_available)
    {
        $this->space_available = $space_available;

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
     * Get the value of salary
     */ 
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     *
     * @return  self
     */ 
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get the value of duration
     */ 
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set the value of duration
     *
     * @return  self
     */ 
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of entitled
     */ 
    public function getEntitled()
    {
        return $this->entitled;
    }

    /**
     * Set the value of entitled
     *
     * @return  self
     */ 
    public function setEntitled($entitled)
    {
        $this->entitled = $entitled;

        return $this;
    }
}
