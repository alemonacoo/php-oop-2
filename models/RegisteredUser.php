<?php
require_once __DIR__ . '/User.php';

class RegisteredUser extends User{
    public $userID;
    private $password;
    public $discount = 20;

    public function getTotalPrice(){
        $price = parent::checkOut();
        return ($price -= ($price * ($discount / 100)));
    }
}


?>