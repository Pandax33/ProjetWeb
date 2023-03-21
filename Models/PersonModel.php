<?php

namespace App\Models;

class PersonModel extends Model
{
    protected $ID_P;
    protected $Firstname_P;
    protected $Lastname_P;
    protected $Role_P;
    protected $mail;
    protected $password;
    


    public function __construct()
    {
        $class =str_replace( __NAMESPACE__.'\\', '', __CLASS__ );
        $this->table = "Person";
        $this->IdCollumName= "ID_P";
    }

    /**
     * Get the value of ID_P
     */ 
    public function getID_P()
    {
        return $this->ID_P;
    }

    /**
     * Set the value of ID_P
     *
     * @return  self
     */ 
    public function setID_P($ID_P)
    {
        $this->ID_P = $ID_P;

        return $this;
    }

    /**
     * Get the value of FirstName_P
     */ 
    public function getFirstname_P()
    {
        return $this->Firstname_P;
    }

    /**
     * Set the value of FirstName_P
     *
     * @return  self
     */ 
    public function setFirstname_P($FirstName_P)
    {
        $this->Firstname_P = $Firstname_P;

        return $this;
    }

    /**
     * Get the value of Lastname_P
     */ 
    public function getLastname_P()
    {
        return $this->Lastname_P;
    }

    /**
     * Set the value of Lastname_P
     *
     * @return  self
     */ 
    public function setLastname_P($Lastname_P)
    {
        $this->Lastname_P = $Lastname_P;

        return $this;
    }

    /**
     * Get the value of Role_P
     */ 
    public function getRole_P()
    {
        return $this->Role_P;
    }

    /**
     * Set the value of Role_P
     *
     * @return  self
     */ 
    public function setRole_P($Role_P)
    {
        $this->Role_P = $Role_P;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}
