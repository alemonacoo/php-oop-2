<?php

class CreditCard{
    public $number;
    public $expirationDate;
    public $name;
    public $surname;
    public $CVV;

    function  __construct($_number, $_expirationDate, $_name, $_surname, $_CVV){
        $this->number = $_number;
        $this->expirationDate = $_expirationDate;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->CVV = $_CVV;
    }

    public function isValid(){
        if($this->$expirationDate >= date("Y/m/d"))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

?>