<!-- Exception handling with finally block -->
<?php
// function inverse($x) {
//     if (!$x) {
//         throw new Exception('Division by zero.');
//     }
//     return 1/$x;
// }

// try {
//     echo inverse(5) . "<br/>";
// } catch (Exception $e) {
//     echo 'Caught exception: ',  $e->getMessage(), "<br/>";
// } finally {
//     echo "First finally.<br/>";
// }

// try {
//     echo inverse(0) . "<br/>";
// } catch (Exception $e) {
//     echo 'Caught exception: ',  $e->getMessage(), "<br/>";
// } finally {
//     echo "Second finally.<br/>";
// }

// // Continue execution
// echo "Hello World<br/>";
?>

<!-- Nested Exception -->
<?php

class MyException extends Exception { }

class Test {
    public function testing() {
        try {
            try {
                throw new MyException('foo!');
            } catch (MyException $e) {
                // rethrow it
                throw $e;
            }
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
}

$foo = new Test;
$foo->testing();

?>