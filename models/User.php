<?php
    require_once __DIR__ . '/CreditCard.php';
    class User {
        public $name;
        public $surname;
        public $email;

        public $address = '';
        public $shoppingCart = [];

        private $CreditCard;


        function __construct($_name, $_surname, $_email){
            $this->price = $price;
            $this->name = $_name;
            $this->$brand = $brand;
        }

        public function addCreditCard($_number, $_expirationDate, $_name, $_surname, $_CVV){
            $this->CreditCard = new CreditCard($_number, $_expirationDate, $_name, $_surname, $_CVV);
        }
    
        public function addProduct($product){
            $this->shoppingCart[] = $product;
        }

        public function getTotalPrice(){
            $totalPrice = 0;
            foreach($this->shoppingCart as $product){
                $totalPrice += $product->price;
            }
            return $totalPrice;
        }
    }
?>