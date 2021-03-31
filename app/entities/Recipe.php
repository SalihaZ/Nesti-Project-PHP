<?php 

class Recipe { 

    private $id_recipe;
    private $date_creation_recipe;
    private $name_recipe;
    private $difficulty_recipe;
    private $number_person_recipe;
    private $state_recipe;
    private $time_recipe;
    private $fk_id_image;
    private $fk_id_chief;
    private $valid = true;

    // public function getChief() {
    //     return ChiefDAO::findById($fk_id_chief);
    // }

    /**
     * Get the value of id_recipe
     */ 
    public function getId_recipe()
    {
        return $this->id_recipe;
    }

    /**
     * Set the value of id_recipe
     * @return  self
     */ 
    public function setId_recipe($id_recipe)
    {
        $this->id_recipe = $id_recipe;

        return $this;
    }

    /**
     * Get the value of date_creation_recipe
     */ 
    public function getDate_creation_recipe()
    {
        return $this->date_creation_recipe;
    }

    /**
     * Set the value of date_creation_recipe
     * @return  self
     */ 
    public function setDate_creation_recipe($date_creation_recipe)
    {
        $this->date_creation_recipe = $date_creation_recipe;

        return $this;
    }

    /**
     * Get the value of name_recipe
     */ 
    public function getName_recipe()
    {
        return $this->name_recipe;
    }


    /**
     * Set the value of name_recipe
     * @return  self
     */ 
    public function setName_recipe($name_recipe)
    {
        $this->name_recipe = $name_recipe;

        return $this;
    }

    /**
     * Get the value of difficulty_recipes
     */ 
    public function getDifficulty_recipe()
    {
        return $this->difficulty_recipe;
    }

    /**
     * Set the value of difficulty_recipe
     * @return  self
     */ 
    public function setDifficulty_recipe($difficulty_recipe)
    {
        $this->difficulty_recipe = $difficulty_recipe;

        return $this;
    }

    /**
     * Get the value of number_person_recipe
     */ 
    public function getNumber_person_recipe()
    {
        return $this->number_person_recipe;
    }

    /**
     * Set the value of number_person_recipe
     * @return  self
     */ 
    public function setNumber_person_recipe($number_person_recipe)
    {
        $this->number_person_recipe = $number_person_recipe;

        return $this;
    }

    /**
     * Get the value of state_recipe
     */ 
    public function getState_recipe()
    {
        return $this->state_recipe;
    }

    /**
     * Set the value of state_recipe
     * @return  self
     */ 
    public function setState_recipe($state_recipe)
    {
        $this->state_recipe = $state_recipe;

        return $this;
    }

    /**
     * Get the value of time_recipe
     */ 
    public function getTime_recipe()
    {
        return $this->time_recipe;
    }

    /**
     * Set the value of time_recipe
     * @return  self
     */ 
    public function setTime_recipe($time_recipe)
    {
        $this->time_recipe = $time_recipe;

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

    // public function setParametersFromArray($data) {
    //     $this->valid = true;

    //     $this->setName_recipe($data["name_recipes"]);
    //     $this->setDifficulty_recipe($data["difficulty_recipes"]);
    //     $this->setNumber_person_recipe($data["number_person_recipes"]);
    //     $this->setState_recipe($data["state_recipes"]);
    //     $this->setTime_recipe($data["time_recipes"]);
    // }
}