<?php
// Class induk (superclass)
class Product {
    public $name;
    public $price;
    public $weight;

    public function __construct($name, $price, $weight) {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
    }

    public function getInfo() {
        return "{$this->name} - Rp{$this->price}, berat: {$this->weight} gram";
    }
}
?>
