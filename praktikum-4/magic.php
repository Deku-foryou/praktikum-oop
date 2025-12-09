<?php
class Demo
{
   private array $data = [];
   public function __get($name)
   {
      echo "Membaca property $name\n";
      return $this->data[$name] ?? null;
   }
   public function __set($name, $value)
   {
      echo "Mengisi property $name dengan $value\n";
      $this->data[$name] = $value;
   }
   public function __call($name, $args)
   {
      echo "Method $name dipanggil dengan argumen: ";
      print_r($args);
   }
}
$obj = new Demo;

$obj->halo("tes 1");
echo $obj->umur;

$obj->nama = "Andi";
$obj->angka = 100;
$obj->status = true;
