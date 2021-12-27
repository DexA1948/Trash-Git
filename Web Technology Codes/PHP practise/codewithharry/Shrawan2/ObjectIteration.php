<!-- <?php
    
    class MyClass
    {
        
        public $var1 = 'value1';
        public $var2 = 'value2';
        public $var3 = 'value3';

        protected $protected = "protected var";
        private $private = "private var";

        function iterateVisible(){
            echo "<br>MyClass::iterateVisible:<br>";
            foreach($this as $key=>$value){
                print "key => $value<br>";
            }
        }

    }

    $class = new MyClass();

    foreach($class as $key => $value){
        print "$key => $value<br>";
    }
    echo "\n";

    $class->iterateVisible();

?> -->

<?php
    class User{
        public $email = "dexant9t@gmail.com";
        public $username = "DexA1948";

        private $password = "PreranaIsWaifu";

        function iterateUser(){
            foreach($this as $key => $value){
                echo "<br> $key => $value";
            }
        }
    }

    $deshant = new User(); 
    // foreach($deshant as $key => $value):
    //     echo "<br> $key => $value";
    // endforeach;

    // $deshant -> iterateUser();
?>