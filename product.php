<?php

class Product
{
    protected $name;
    protected $brand;
    protected $price;
    protected $discount;
    protected $cathegory;
    
        public function __construct($name, $brand, $price, $discount, $cathegory)
        {
         $this->name = getName($name);   
         $this->brand = getBrand($brand);   
         $this->price = getPrice($price);   
         $this->discount = getDiscount($discount);   
         $this->cathegory = getCathegory($cathegory);   
        }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of discount
     */ 
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */ 
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get the value of cathegory
     */ 
    public function getCathegory()
    {
        return $this->cathegory;
    }

    /**
     * Set the value of cathegory
     *
     * @return  self
     */ 
    public function setCathegory($cathegory)
    {
        $this->cathegory = $cathegory;

        return $this;
    }
}
?>