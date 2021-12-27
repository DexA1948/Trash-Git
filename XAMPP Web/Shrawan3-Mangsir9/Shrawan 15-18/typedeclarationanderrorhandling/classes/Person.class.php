<?php
class Person{
    public $name;
    public $eyeColor;
    public $age;

    /*Note:
    By using type declaration, we can throw an error if wrong type is given!
    Works with:
    -class/interface names
    -self (used to reference to the same class)
    -array
    -callable
    -bool
    -float
    -int
    -string
    -iterable
    -object
    */


    //type declaration, we are asking for string
    public function setName(string $newName){
        $this->name = $newName;
    }

    public function getName(){
        return $this->name;
    } 
}