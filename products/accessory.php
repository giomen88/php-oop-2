<?php
require_once __DIR__ . '../Product.php';

class Accessory extends Product
{
    protected $material;
    protected $size;


    public function __contruct($name, $brand, $price, $discount, $cathegory, $material, $size)
    {
        parent::__construct($name, $brand, $price, $discount, $cathegory);
        $this->setMaterial($material);
        $this->setSize($size);
    }

    /**
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }
}    
?>