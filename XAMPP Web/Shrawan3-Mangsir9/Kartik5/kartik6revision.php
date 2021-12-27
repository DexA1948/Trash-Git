<?php
$name = $gender = "";
$nameerr = $gendererr = "";

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(empty($_POST["name"])){
        $nameerr = "Name Is Required";
    }else{
        $name = test_input($_POST["name"]);
        
        if(!preg_match("/^[a-zA-Z-']*$/", $name)){
            $nameErr = "Only letters and whitespaces";
        }
    }
    
    if(empty($_POST["gender"])){
        $gendererr = "Gender Is Required";
    }else{
        $gender = $_POST["gender"];
    }

    echo "\$name is $name, \$gender is $gender";
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

Name:<input tyep="text" id="name" name="name" value="<?php echo $name;?>">
<span class="error">*<?php echo $nameerr;?></span>

<br><br>

Gender:<br>
<input type="radio" id="gender" name="gender" value="male" <?php if(isset($gender) && $gender=="male") echo "checked";?> >Male
<input type="radio" id="gender" name="gender" value="female" <?php if(isset($gender) && $gender=="female") echo "checked";?> >Female
<span class="error">*<?php echo $gendererr;?></span>

<br><br><input type="submit">

</form>
