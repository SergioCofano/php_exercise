<?php
require 'index.php';

class Student extends Person{
    public $classe;

    public function __construct($_name,$_surname,$_age,$_classe) {

        parent::__construct($_name,$_surname,$_age);
        $this->classe = $_classe;
    }

    public function studentsayHello(){
        echo "Ciao mi chiamo $this->name $this->surname ho $this->age anni e frequento il $this->classe superiore";
    }
}

$student1 =new Student('Lucia','Lorusso',18,'quinto ');
$student2 =new Student('Dario','Greggio',16,'terzo');
$student1->studentsayHello();
$student2->studentsayHello();
