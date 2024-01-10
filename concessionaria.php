<?php

class Car {
    public $marchio;
    public $model;
    public $price;

    public static $counter = 0;

    public function __construct($_marchio,$_model,$_price){

        $this-> marchio = $_marchio;
        $this-> model = $_model;
        $this-> price =$_price;

        self::$counter++;

    }

    public function info(){
    echo "Quest' auto è  del marchio " . $this-> marchio . " con modello " . $this-> model .  " e costa " . $this-> price . " euro";
    }
}

$car1= new Car('Jeep','Renegade',25000,);
