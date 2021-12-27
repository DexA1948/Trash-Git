<?php

namespace Person;

class Person{
public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
}

public function getPerson(){
    return $this->name." ".$this->age;
}
}