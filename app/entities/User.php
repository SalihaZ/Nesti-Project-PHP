<?php 

class User { 

    //Attributes
    private $id_user;
    private $username_user;
    private $passwordHash_user;
    private $lastname_user;
    private $firstname_user;
    private $email_user;
    private $state_user;
    private $date_creation_user;
    private $adress1_user;
    private $adress2_user;
    private $postcode_user;
    private $fk_id_city;
    private $valid_user = true;

    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of username_user
     */ 
    public function getUsername_user()
    {
        return $this->username_user;
    }

    /**
     * Set the value of username_user
     * @return  self
     */ 
    public function setUsername_user($username_user)
    {
        $this->username_user = $username_user;

        return $this;
    }

    /**
     * Get the value of passwordHash_user
     */ 
    public function getPasswordHash_user()
    {
        return $this->passwordHash_user;
    }

    /**
     * Set the value of passwordHash_user
     * @return  self
     */ 
    public function setPasswordHash_user($passwordHash_user)
    {
        $this->passwordHash_user = $passwordHash_user;

        return $this;
    }

    /**
     * Get the value of lastname_user
     */ 
    public function getLastname_user()
    {
        return $this->lastname_user;
    }

    /**
     * Set the value of lastname_user
     * @return  self
     */ 
    public function setLastname_user($lastname_user)
    {
        $this->lastname_user = $lastname_user;

        return $this;
    }

    /**
     * Get the value of firstname_user
     */ 
    public function getFirstname_user()
    {
        return $this->firstname_user;
    }

    /**
     * Set the value of firstname_user
     * @return  self
     */ 
    public function setFirstname_user($firstname_user)
    {
        $this->firstname_user = $firstname_user;

        return $this;
    }

    /**
     * Get the value of email_user
     */ 
    public function getEmail_user()
    {
        return $this->email_user;
    }

    /**
     * Set the value of email_user
     * @return  self
     */ 
    public function setEmail_user($email_user)
    {
        $this->email_user = $email_user;

        return $this;
    }

    /**
     * Get the value of state_user
     */ 
    public function getState_user()
    {
        return $this->state_user;
    }

    /**
     * Set the value of state_user
     * @return  self
     */ 
    public function setState_user($state_user)
    {
        $this->state_user = $state_user;

        return $this;
    }

    /**
     * Get the value of date_creation_user
     */ 
    public function getDate_creation_user()
    {
        return $this->date_creation_user;
    }

    /**
     * Set the value of date_creation_user
     * @return  self
     */ 
    public function setDate_creation_user($date_creation_user)
    {
        $this->date_creation_user = $date_creation_user;

        return $this;
    }

    /**
     * Get the value of adress1_user
     */ 
    public function getAdress1_user()
    {
        return $this->adress1_user;
    }

    /**
     * Set the value of adress1_user
     * @return  self
     */ 
    public function setAdress1_user($adress1_user)
    {
        $this->adress1_user = $adress1_user;

        return $this;
    }

    /**
     * Get the value of adress2_user
     */ 
    public function getAdress2_user()
    {
        return $this->adress2_user;
    }

    /**
     * Set the value of adress2_user
     * @return  self
     */ 
    public function setAdress2_user($adress2_user)
    {
        $this->adress2_user = $adress2_user;

        return $this;
    }

    /**
     * Get the value of postcode_user
     */ 
    public function getPostcode_user()
    {
        return $this->postcode_user;
    }

    /**
     * Set the value of postcode_user
     * @return  self
     */ 
    public function setPostcode_user($postcode_user)
    {
        $this->postcode_user = $postcode_user;

        return $this;
    }

  /**
     * Get the value of fk_id_city
     */ 
    public function getFk_id_city()
    {
        return $this->fk_id_city;
    }

    /**
     * Set the value of fk_id_city
     *
     * @return  self
     */ 
    public function setFk_id_city($fk_id_city)
    {
        $this->fk_id_city = $fk_id_city;

        return $this;
    }

    /**
     * Get the value of valid_user
     */ 
    public function getValid_user()
    {
        return $this->valid_user;
    }

    /**
     * Set the value of valid_user
     * @return  self
     */ 
    public function setValid_user($valid_user)
    {
        $this->valid_user = $valid_user;

        return $this;
    }

    public function setPasswordHashFromPlaintext($plaintextPassword){
        $this->setPasswordHash_user(password_hash($plaintextPassword, PASSWORD_DEFAULT));
    }
    public function isPassword($plaintextPassword){
        return password_verify ( $plaintextPassword, $this->getPasswordHash_user() );
    }

}
