<?php
    class Product {
        public $price;
        public $name = '';
        public $brand = '';

        public $description = '';
        public $category = '';
        
        public $iva = 22;

        function __construct($_name, $_price = 0, $_brand){
            $this->price = $price;
            $this->name = $_name;
            $this->$brand = $brand;
        }
    }

    class GameProduct extends Product {
    public $category = 'game';
    public $weigth = '';
    public $material = '';
    }

    class FoodProduct extends Product {
        public $category = 'food';
        public $expiration_date = '';
        public $ingredients = [];
        public $weigth = '';
     }
     


?>