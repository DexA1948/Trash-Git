<pre>
<?php

    // $strerr = new Exception("Not a string", 5);
    // $zeroerr = new Exception("Divide By Zero", 0, $strerr);

    // function divide(int $a, int $b): int
    // {
    //     if ($b == 0) throw $GLOBALS["zeroerr"];

    //     return $a / $b;
    // }

    // $a = "100";
    // $b = 10;

    // try{
    //     //code that can throw exception
    //     echo divide($a, $b);
    // }catch(Exception $e){
    //     //what to do if exception occurs
    //     echo "Unable to divide";
    // }finally{
    //     //always runs no matter what
    //     echo "Process Complete";
    // }

    //exception object has three parameters and different methods 

    //error message
    //error code: 0, 1, 2 etc to identify
    //previous code: if it is found in nested catch

    //getMessage()
    //getCode()
    //getPrevious()
    //getFile()
    //getLine()

    $strerr = new Exception("Not a string", 5);
    $zeroerr = new Exception("Divide By Zero", 0, $strerr);

    function divide(int $a, int $b): int
    {
        if ($b == 0) throw $GLOBALS["zeroerr"];

        return $a / $b;
    }

    function printstring($str)
    {
        if (!is_string($str)) throw $GLOBALS["strerr"];;

        echo $str;
    }

    $str = 0;
    
    try {
        printstring($str);
    } catch (Exception $e) {
        print_r($e);
        
        try {
            $result = divide(100, $str);
        } catch (Exception $e2) {
            print_r($e2);
            echo $e2->getMessage()."<br>";
            echo $e2->getCode()."<br>";
            echo $e2->getPrevious()."<br>";
            echo $e2->getFile()."<br>";
            echo $e2->getLine()."<br>";
        }
    }

?>
</pre>