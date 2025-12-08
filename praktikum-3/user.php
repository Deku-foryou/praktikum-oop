<?php
class User
{
   public function __construct(
      public string $name = "Guest",
      public int $age = 0
   ) {
   }
}
$u1 = new User();
$u2 = new User("Rani", 22);

//Tanpa parameter 
$u1 = new User();
echo "User 1: " . $u1->name . "\n";

//Satu parameter
$u2 = new User("Rani");
echo "User 2: " . $u2->name . "\n";

//Dua parameter
$u3 = new User("Budi", 25);
echo "User 3: " . $u3->name . ", Umur: " . $u3->age . "\n";
