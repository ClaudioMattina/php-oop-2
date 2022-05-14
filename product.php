<?php

class Product
{

    public $name;
    public $price;
    public $description;

    public function __construct($name, $price, $description)
    {
        $this-> name = $name;
        $this-> price = $price;
        $this-> description = $description;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this-> price;
    }

    public function getDescription(){
        return $this-> description;
    }

    public function setDescription($description){
        $this->description = $description;
        return $this;
    }

}


