<?php
class favList{
    public $car;
    public $color;

    function __construct($car, $color){
        $this->car = $car;
        $this->color = $color;
    }

    function __destruct(){
        echo "This persons favorite car is {$this->car} and his favorite color is $this->color";
    }

    function print(){
        echo $this->car;
    }

}

$deshant = new favList("volvo", "yellow");
?>

<body>
    <br>
    <h1>Hello World</h1>
    <br>
</body>

<?php

$deshant->print();
//destructor
?>