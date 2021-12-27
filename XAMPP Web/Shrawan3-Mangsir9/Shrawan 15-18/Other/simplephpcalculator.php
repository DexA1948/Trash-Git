<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="top" style="text-align: Center;">
        <h1>PHP Calculator</h1>
    </div>
    <hr>
    <form method="POST">
        <input type="number" id="number1" name="number1" min="0" max="1000" required>
        <input type="number" id="number2" name="number2" min="0" max="1000" required>
        <select name="operator" id="operator">
            <option value="none">NONE</option>
            <option value="add">ADD</option>
            <option value="subtract">SUBTRACT</option>
            <option value="multiply">MULTIPLY</option>
            <option value="divide">DIVIDE</option>
            <option value="modulus">MODULUS</option>
        </select>
        <input type="Submit" name='submit' value="Calculate">
    </form>
    <details>
        <summary>Answer</summary>
        <p>Check</p>
        <p id="answer">
        <?php
            if (isset($_POST['submit'])){
                $num1 = $_REQUEST['number1'];
                $num2 = $_REQUEST['number2'];
                $operator = $_REQUEST['operator'];
                
                switch($operator){
                    case "none":
                        echo "Error!Choose a operator";
                        break;
                    case "add":
                        echo $num1+$num2;
                        break;
                    case "subtract":
                        echo $num1-$num2;
                        break;
                    case "multiply":
                        echo $num1*$num2;
                        break;
                    case "divide":
                        echo $num1/$num2;
                        break;
                    case "modulus":
                        echo $num1%$num2;
                        break;
                    default:
                        echo "I suppose you wanna add. Answer: ".($num1 + $num2);
                }
            }
        ?>
        </p>
    </details>
</body>

<script>

</script>
</html>