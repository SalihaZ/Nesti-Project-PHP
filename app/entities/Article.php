<?php 

class Article { 

    private $id_article;
    private $quantity_unite_article;
    private $state_article;
    private $date_creation_article;
    private $date_update_article;
    private $fk_id_product;
    private $fk_id_image;
    private $fk_id_measure_unit;
    private $valid;


    /**
     * Get the value of id_article
     */ 
    public function getId_article()
    {
        return $this->id_article;
    }

    /**
     * Set the value of id_article
     * @return  self
     */ 
    public function setId_article($id_article)
    {
        $this->id_article = $id_article;

        return $this;
    }

    /**
     * Get the value of quantity_unite_article
     */ 
    public function getQuantity_unite_article()
    {
        return $this->quantity_unite_article;
    }

    /**
     * Set the value of quantity_unite_article
     * @return  self
     */ 
    public function setQuantity_unite_article($quantity_unite_article)
    {
        $this->quantity_unite_article = $quantity_unite_article;

        return $this;
    }

    /**
     * Get the value of state_article
     */ 
    public function getState_article()
    {
        return $this->state_article;
    }

    /**
     * Set the value of state_article
     * @return  self
     */ 
    public function setState_article($state_article)
    {
        $this->state_article = $state_article;

        return $this;
    }

    /**
     * Get the value of date_creation_article
     */ 
    public function getDate_creation_article()
    {
        return $this->date_creation_article;
    }

    /**
     * Set the value of date_creation_article
     * @return  self
     */ 
    public function setDate_creation_article($date_creation_article)
    {
        $this->date_creation_article = $date_creation_article;

        return $this;
    }

    /**
     * Get the value of date_update_article
     */ 
    public function getDate_update_article()
    {
        return $this->date_update_article;
    }

    /**
     * Set the value of date_update_article
     * @return  self
     */ 
    public function setDate_update_article($date_update_article)
    {
        $this->date_update_article = $date_update_article;

        return $this;
    }

    /**
     * Get the value of fk_id_product
     */ 
    public function getFk_id_product()
    {
        return $this->fk_id_product;
    }

    /**
     * Set the value of fk_id_product
     * @return  self
     */ 
    public function setFk_id_product($fk_id_product)
    {
        $this->fk_id_product = $fk_id_product;

        return $this;
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
     * Get the value of fk_id_measure_unit
     */ 
    public function getFk_id_measure_unit()
    {
        return $this->fk_id_measure_unit;
    }

    /**
     * Set the value of fk_id_measure_unit
     * @return  self
     */ 
    public function setFk_id_measure_unit($fk_id_measure_unit)
    {
        $this->fk_id_measure_unit = $fk_id_measure_unit;

        return $this;
    }

    /**
     * Get the value of valid
     */ 
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Set the value of valid
     * @return  self
     */ 
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }
}