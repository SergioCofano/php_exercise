<?php

class Animal {
    public $name;
    public $age;

    public static $counter = 0;

    public function __construct($_name,$_age){

        $this-> name = $_name;
        $this-> age = $_age;

        self::$counter++;

    }

    public function info(){
        echo "Si chiama $this->name ha $this->age anni";
    }
}