<?php
require 'zoo.php';

class Reptile extends Animal{
    public $specie;

    public function __construct($_name,$_age,$_specie) {

        parent::__construct($_name,$_age);
        $this->specie = $_specie;
    }

    public function reptiletype(){
        echo "Si chiama $this->name ha $this->age anni ed è un $this->specie";
    }
}

$reptile1 =new Reptile('Jerry',6,'Pitone');
$reptile1-> reptiletype();