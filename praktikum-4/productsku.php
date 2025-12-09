<?php

class Product {
    private string $sku;

    public function __construct(string $sku) {
        $this->sku = $sku;
    }

    public function getSku(): string {
        return $this->sku;
    }
}

$p = new Product("SKU-001");
$p->sku = "SKU-XYZ";

echo $p->getSku();
