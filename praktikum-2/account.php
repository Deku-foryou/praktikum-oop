<?php
class Account
{
   public string $owner;
   protected float $balance;
   private string $pin;
   public function __construct(string $owner, float $balance, string $pin)
   {
      $this->owner = $owner;
      $this->balance = $balance;
      $this->pin = $pin;
   }
   public function getBalance(string $pin): float
   {
      if ($pin === $this->pin)
         return $this->balance;
      throw new Exception("PIN salah");
   }
}

class PremiumAccount extends Account {
    public function debugBalance() {
        return $this->balance;
    }
}

$acc = new Account("Rani", 5000, "1234");
echo $acc->owner; // boleh
echo $acc->getBalance("1234"); // boleh
echo $acc->balance; // error
echo $acc->pin; // error