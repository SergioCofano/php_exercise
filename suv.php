<?php

require 'concessionaria.php';

class Suv extends Car{
    public $type;

    public function __construct($_marchio,$_model,$_price,$_type) {

        parent::__construct($_marchio,$_model,$_price);
        $this->type = $_type;
    }

    public function suvcar(){
        echo "Quest'auto è del marchio " . $this-> marchio . " con modello " . $this-> model .  " costa " . $this-> price . " euro" . " ed è un " . $this->type;
    }
}

$suv1 =new Suv('Jeep','Renegade',25000,'SUV');
$suv1-> suvcar();