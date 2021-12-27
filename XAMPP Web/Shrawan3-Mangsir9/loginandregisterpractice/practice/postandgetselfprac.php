<?php
    if($_POST){
        echo "<pre>";
        echo htmlspecialchars(print_r($_POST));
        echo "</pre>";
    }
?>

<form action="" method="post">
    <label>Username: </label><input type="text" name="user[username]"><br>
    <label>Password: </label><input type="password" name="user[password]"><br>
    <label>Fruits:</label>
    <select multiple name="fruits[]">
        <option value="apple">Apple</option>
        <option value="banana">Banana</option>
        <option value="pear">Pear</option>
    </select><br>
    <input type="submit" value="Submit Button">
</form>