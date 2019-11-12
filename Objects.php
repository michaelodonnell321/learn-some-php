<?php
//php is object oriented, but most php functions are not
//class is definition of an object, object is instance of object
//meaning from one class there can be many objects

//for example, a class called person

class Person {
    //a constructor
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function say_hello() {
        echo "My name is " . $this->first_name . " " . $this->last_name . "\n";
    }
}


?>