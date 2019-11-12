<?php
//php is object oriented, but most php functions are not
//class is definition of an object, object is instance of object
//meaning from one class there can be many objects

//for example, a class called person

class Person {
    //a public constructor
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
    //public function for external use
    public function say_hello() {
        echo "My name is " . $this->first_name . " " . $this->last_name . "\n";
    }
    //private, will not work externally
    private function full_name() {
        return $this->first_name . " " . $this->last_name;
    }
}

$michael = new Person("Michael", "O'Donnell");
$michael->say_hello();
//this will not work, private function
// echo $michael->full_name();


//inheritance allows us to re-use code 

class MathPerson extends Person {
    function addinator($first_number, $second_number) {
        $sum = $first_number + $second_number;
        echo $this->first_name . "knows that " . $first_number . " + " . $second_number. "is " . $sum; 
    }
}

$carolyn = new MathPerson("Carolyn", "O'Donnell");
//carolyn also gets say name from person, although we didn't write this function
//in MathPerson class because of inheritance
$carolyn->say_name();
$carolyn->sum_numbers(1,4);
?>