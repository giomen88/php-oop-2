<?php
require_once __DIR__ . '../Product.php';

class Food extends Product
{
    protected $ingredients;
    protected $expiration;


    public function __contruct($name, $brand, $price, $discount, $cathegory, $ingredients, $expiration)
    {
        parent::__construct($name, $brand, $price, $discount, $cathegory);
        $this->setIngredients($ingredients);
        $this->setExpiration($expiration);
    }

    /**
     * Get the value of ingredients
     */ 
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     *
     * @return  self
     */ 
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get the value of expiration
     */ 
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set the value of expiration
     *
     * @return  self
     */ 
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }
}
?>