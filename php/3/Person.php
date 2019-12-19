<?php
class Person{
    public $name;
    public $age;
    public function sayHi(){
        echo "Hi<br>";
    }
    public function sayMyNameIs(){
        echo "My Name is {$this->name}<br>";
    }
}