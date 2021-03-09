<?php 

class City { 

    private $id_city;
    private $name_city;


    /**
     * Get the value of id_city
     */ 
    public function getId_city()
    {
        return $this->id_city;
    }

    /**
     * Set the value of id_city
     *
     * @return  self
     */ 
    public function setId_city($id_city)
    {
        $this->id_city = $id_city;

        return $this;
    }

    /**
     * Get the value of name_city
     */ 
    public function getName_city()
    {
        return $this->name_city;
    }

    /**
     * Set the value of name_city
     *
     * @return  self
     */ 
    public function setName_city($name_city)
    {
        $this->name_city = $name_city;

        return $this;
    }
    
}