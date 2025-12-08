<?php
class User {
    public string $name;
    public int $age;
}

$a = new User();
$a->name = "Budi";
$a->age = 20;

$b = $a;
$b->name = "Sinta";

echo $a->name . PHP_EOL;

$c = clone $a;
$c->name = "Tono";

echo $a->name . PHP_EOL;
echo $c->name . PHP_EOL;
