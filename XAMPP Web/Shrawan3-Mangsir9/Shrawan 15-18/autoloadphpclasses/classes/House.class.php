<?php

class House{
public function __construct($address, $postalcode){
    $this->address = $address;
    $this->postalcode = $postalcode;
}

public function getAddress(){
    return $this->address." ".$this->postalcode;
}
}