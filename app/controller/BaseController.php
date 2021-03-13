<?php 

abstract class BaseController{

    public function __construct()
    {
        $this->initialize();
    }

    protected abstract function initialize();
}