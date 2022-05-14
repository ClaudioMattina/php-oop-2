<?php

require_once __DIR__ . '/Product.php';


class Food extends Product
{
    public $ingredients;

    public function __construct($name,$price,$description,$ingredients)
    {
        parent:: __construct($name,$price,$description);
        $this->ingredients = $this-> getIngredients($ingredients);
    }

    private function getIngredients($ingredients){
        return $ingredients;
    }

    public function setIngredients($ingredients){
        $this->ingredients = $ingredients;
    }
}

?>