<?php
require_once __DIR__ . '../Product.php';


class Toy extends Product
{
    protected $material;

    public function __contruct($name, $brand, $price, $discount, $cathegory, $material)
    {
        parent::__construct($name, $brand, $price, $discount, $cathegory);
        $this->setMaterial($material);
    }

    /**
     * Get the value of material
     */ 
    public function getMaterial($material)
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
}
?>