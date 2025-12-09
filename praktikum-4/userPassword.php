<?php

class User {
    private string $hashedPassword;

    public function setPassword(string $password): void {
        $this->hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    }
}
var_dump($user);

$user = new User();
$user->setPassword("rahasia123");
