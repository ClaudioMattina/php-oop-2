<?php

class CreditCard{

    public $number;
    public $CVD;
    public $scadenza;

    public function __construct($number,$CVD,$scadenza)
    {
        $this->number = $number;
        $this->CVD = $CVD;
        $this->scadenza = $scadenza;
    }

    public function getNumber(){
        return $this->number;
    }

    public function getCDV(){
        return $this -> CVD;
    }

    public function getScadenza(){
        return $this -> scadenza;
    }

    public function setNumber($number){
        $this->number=$number;
    }

    public function setCVD($CVD){
        $this->CVD=$CVD;
    }

    public function setScadenza($Scadenza){
        $this->Scadenza=$Scadenza;
    }
} 



?>