<?php
class Account
{
   private float $balance = 0;
   public function getBalance(): float
   {
      return $this->balance;
   }

   public function setBalance(float $amount): void
   {
      if ($amount >= 0) {
         $this->balance = $amount;
      } else {
         throw new InvalidArgumentException("Saldo tidak boleh negatif");
      }
   }
}
public function setBalanceUnsafe($amount) {
    $this->balance = $amount;
}

$acc = new Account();
$acc->setBalance(-10);
echo $acc->balance();