<?php

//we are using namespace "second" 
//this causes the class A defined here to be virtually in a subfolder named "second"
//to use this class simply use second\A
namespace second;
class A{
    function __construct()
    {
        echo "This is in secondnamespace";
    }
}

?>