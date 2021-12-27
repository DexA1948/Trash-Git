<?php

class Fruit{
    protected $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    public function printname(){
        echo $this->name;
    }

    public function printcolor(){
        echo $this->color;
    }
}

class Strawberry extends Fruit{
    private function displayname(){
        echo "Name is $this->name";
    }

    public function display(){
        $this->displayname();
    }
}

$strawberry = new Strawberry("strawberry", "red");

$strawberry->display();

// $strawberry->displayname();//error private chiz harulai bahira scope bata chaluana mildaina

//Therefore private parameters and methods are not inherited by children