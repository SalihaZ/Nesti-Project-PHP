<?php 

abstract class BaseController{

    protected $_data=[];

    public function __construct()
    {
        $this->initialize();
    }

    public function getData(){
        if (isset($this->_data) &&!empty($this->_data)){
            return $this->_data;
        }
    }

    protected abstract function initialize();
}