<?php

class Person {
    public $name;
    public $surname;
    public $age;

    public static $counter = 0;

    public function __construct($_name,$_surname,$_age){

        $this-> name = $_name;
        $this-> surname = $_surname;
        $this-> age = $_age;

        self::$counter++;

    }

    public function info(){
        echo "Ciao mi chiamo $this->name $this->surname e ho $this->age anni";
    }
}

// $person1 = new Person('Mario','Rossi',38);

// print_r($person1);

// // echo Person::$counter;

// $person1->info();