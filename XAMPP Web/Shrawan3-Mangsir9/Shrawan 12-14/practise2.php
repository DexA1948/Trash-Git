<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_REQUEST['fname'];

            if(empty($name)){
                echo "Name is empty";
            } else{
                echo $name;
            }
        }
           
        ?>