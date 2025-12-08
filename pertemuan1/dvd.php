<?php
require_once "Product.php";

// Class turunan dari Product
class DVD extends Product {
    public $duration;

    public function __construct($name, $price, $weight, $duration) {
        parent::__construct($name, $price, $weight);
        $this->duration = $duration;
    }

    // Override method getInfo
    public function getInfo() {
        return parent::getInfo() . ", durasi: {$this->duration} menit";
    }
}
?>
