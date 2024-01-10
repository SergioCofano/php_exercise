<?php

require 'zoo.php';

class Mammal extends Animal{
    public $specie;

    public function __construct($_name,$_age,$_specie) {

        parent::__construct($_name,$_age);
        $this->specie = $_specie;
    }

    public function mammaltype(){
        echo "Si chiama $this->name ha $this->age anni ed è un $this->specie";
    }
}

$mammal1 =new Mammal('Filiberto',4,'Delfino ');
$mammal1-> mammaltype();