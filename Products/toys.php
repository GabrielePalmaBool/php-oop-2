<?php

class toys extends product {
    private $brand_name;
    private $target;
    private $material;
    private $company_name;

    public function __construct($title, $img, $price, $brand_name, $target, $material,$company_name) {

        $this -> setTitle($title);
        $this -> setImg($img);
        $this -> setPrice($price);
        $this -> setBrand($brand_name);
        $this -> setTarget($target);
        $this -> setMaterial($material);
        $this -> setCompName($company_name);
    }

     //funzioni set
     public function setTarget($target) {
        $this -> $target = $target;
    }
    public function setBrand($brand_name) {
        $this -> $brand_name = $brand_name;
    }
    public function setMaterial($material) {
        $this -> $material = $material;
    }
    public function setCompName($company_name) {
        $this -> $company_name = $company_name;
    }

    //funzioni get 
    public function getTarget() {
        return $this -> target;
    }
    public function getBrand() {
        return $this -> brand_name;
    }
    public function getMaterial() {
        return $this -> material;
    }
    public function getCompName() {
        return $this -> company_name;
    }
    

}
?>