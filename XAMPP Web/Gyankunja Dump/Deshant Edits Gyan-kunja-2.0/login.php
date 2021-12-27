<!DOCTYPE HTML>
<html>

<head>
    <title>Gyankunja - Login</title>
</head>

<style>
    .error {
        color: #FF0000;
    }
</style>

<body>

    <!-- PHP Validation -->
    <?php require "loginvalidation.php"; ?>

    <h2>Gyankunja Login Form</h2>
    
    <p><span class="error">* required field</span></p>

    <form name="GK-login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    
        E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">*<?php echo $emailErr; ?></span>
        <br><br>
        
        Password: <input type="password" name="password">
        <span class="error">*<?php echo $passwordErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Login">
    </form>

</body>

</html>