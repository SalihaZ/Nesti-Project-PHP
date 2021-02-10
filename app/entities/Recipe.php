<?php 

class Recipe { 

    private $id_recipes;
    private $date_creation_recipes;
    private $name_recipes;
    private $difficulty_recipes;
    private $number_person_recipes;
    private $state_recipes;
    private $time_recipes;
    private $fk_id_image;
    private $fk_id_chief;
    private $valid = true;

    // public function getChief() {
    //     return ChiefDAO::findById($fk_id_chief);
    // }

    /**
     * Get the value of id_recipes
     */ 
    public function getId_recipes()
    {
        return $this->id_recipes;
    }

    /**
     * Set the value of id_recipes
     * @return  self
     */ 
    public function setId_recipes($id_recipes)
    {
        $this->id_recipes = $id_recipes;

        return $this;
    }

    /**
     * Get the value of date_creation_recipes
     */ 
    public function getDate_creation_recipes()
    {
        return $this->date_creation_recipes;
    }

    /**
     * Set the value of date_creation_recipes
     * @return  self
     */ 
    public function setDate_creation_recipes($date_creation_recipes)
    {
        $this->date_creation_recipes = $date_creation_recipes;

        return $this;
    }

    /**
     * Get the value of name_recipes
     */ 
    public function getName_recipes()
    {
        return $this->name_recipes;
    }

    /**
     * Set the value of name_recipes
     * @return  self
     */ 
    public function setName_recipes($name_recipes)
    {
        $this->name_recipes = $name_recipes;

        return $this;
    }

    /**
     * Get the value of difficulty_recipes
     */ 
    public function getDifficulty_recipes()
    {
        return $this->difficulty_recipes;
    }

    /**
     * Set the value of difficulty_recipes
     * @return  self
     */ 
    public function setDifficulty_recipes($difficulty_recipes)
    {
        $this->difficulty_recipes = $difficulty_recipes;

        return $this;
    }

    /**
     * Get the value of number_person_recipes
     */ 
    public function getNumber_person_recipes()
    {
        return $this->number_person_recipes;
    }

    /**
     * Set the value of number_person_recipes
     * @return  self
     */ 
    public function setNumber_person_recipes($number_person_recipes)
    {
        $this->number_person_recipes = $number_person_recipes;

        return $this;
    }

    /**
     * Get the value of state_recipes
     */ 
    public function getState_recipes()
    {
        return $this->state_recipes;
    }

    /**
     * Set the value of state_recipes
     * @return  self
     */ 
    public function setState_recipes($state_recipes)
    {
        $this->state_recipes = $state_recipes;

        return $this;
    }

    /**
     * Get the value of time_recipes
     */ 
    public function getTime_recipes()
    {
        return $this->time_recipes;
    }

    /**
     * Set the value of time_recipes
     * @return  self
     */ 
    public function setTime_recipes($time_recipes)
    {
        $this->time_recipes = $time_recipes;

        return $this;
    }

    /**
     * Get the value of valid
     */ 
    public function isValid()
    {
        return $this->valid;
    }

    /**
     * Get the value of fk_id_image
     */ 
    public function getFk_id_image()
    {
        return $this->fk_id_image;
    }

    /**
     * Set the value of fk_id_image
     * @return  self
     */ 
    public function setFk_id_image($fk_id_image)
    {
        $this->fk_id_image = $fk_id_image;

        return $this;
    }

    /**
     * Get the value of fk_id_chief
     */ 
    public function getFk_id_chief()
    {
        return $this->fk_id_chief;
    }

    /**
     * Set the value of fk_id_chief
     * @return  self
     */ 
    public function setFk_id_chief($fk_id_chief)
    {
        $this->fk_id_chief = $fk_id_chief;

        return $this;
    }

    public function setParametersFromArray($data) {
        $this->valid = true;

        $this->setName_recipes($data["name_recipes"]);
        $this->setDifficulty_recipes($data["difficulty_recipes"]);
        $this->setNumber_person_recipes($data["number_person_recipes"]);
        $this->setState_recipes($data["state_recipes"]);
        $this->setTime_recipes($data["time_recipes"]);
    }
}