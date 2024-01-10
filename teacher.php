<?php

require 'index.php';

class Teacher extends Person{
    public $subject;

    public function __construct($_name,$_surname,$_age,$_subject) {

        parent::__construct($_name,$_surname,$_age);
        $this->subject = $_subject;
    }

    public function teachersayHello(){
        echo "Ciao mi chiamo $this->name $this->surname ho $this->age anni e insegno  $this->subject";
    }
}

$teacher1 = new Teacher('Mario','Rossi',38,'Fisica ');

$teacher2 = new Teacher('Raffaella','Caputo',46,'Scienze');

$teacher1->teachersayHello();
$teacher2->teachersayHello();