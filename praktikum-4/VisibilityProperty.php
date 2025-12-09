<?php

class MyClass {
    public string $pub  = 'Public';
    protected string $prot = 'Protected';
    private string $priv = 'Private';

    public function dump(): void {
        echo $this->pub . "\n";
        echo $this->prot . "\n";
        echo $this->priv . "\n";
    }
}

class MyChild extends MyClass {
    private string $priv = "Private Punya Child";

    public function check(): void {
        echo $this->pub . "\n";
        echo $this->prot . "\n";
        echo $this->priv . "\n"; 
    }
}

$child = new MyChild();
$child->check();


$obj = new MyClass();
echo $obj->pub . "\n";
//echo $obj->prot; // error
//echo $obj->priv; // error
$obj->dump();
