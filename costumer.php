<?php
require_once __DIR__ . '/CreditCard.php';

class Costumer{
    public $name;
    public $last_name;
    public $age;
    public $credit_card;
    public $is_register;
    public $discount;

    public function __construct($name,$last_name,$age,$credit_card,$is_register,$discount)
    {
        $this->name=$name;
        $this->last_name=$last_name;
        $this->age=$age;
        $this->credit_card=$credit_card;
        $this->is_register=$is_register;
        $this->discount=$discount;
    }

    public function getDiscount(){
        return "Hai diritto al " . $this->discount . "% di sconto.";
    }

    public function setDiscount(){
       return  $this-> is_register ? $this-> discount = 20 : $this->discount = 0;
    }

    public function setCreditCard($credit_card){

        /* da ripassare */
        if(!$credit_card instanceof CreditCard) return false;
        $this->credit_card = $credit_card;
    }

    public function getName(){
        return $this-> name;
    }

    public function getLastName(){
        return $this-> last_name;
    }

    public function getAge(){
        return $this-> age;
    }

    public function getIsRegister(){
        return $this-> is_register;
    }

}
?>