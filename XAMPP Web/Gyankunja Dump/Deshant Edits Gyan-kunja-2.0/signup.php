<!DOCTYPE HTML>
<html>

<head>
    <title>Gyankunja - Sign Up</title>
</head>

<!-- 
    to deepak:
    Yo page chai signup form ko html ho tmle yo page matra herda hunxa esma css haldeu
    .php page herna parena
    esma use bhako php tags important xa 
    '< ?php' ra '?>'
    ani 'signupvalidation.php' ra 'db.php' same folder ma chainxa kam garna
    also filenames exact rakha
 -->


<!-- to deepak: Remove this style tag after no more required -->
<style>
    .error {
        color: #FF0000;
    }
</style>

<body>

    <!-- PHP Validation -->
    <?php require "signupvalidation.php"; ?>

    <h2>Gyankunja Signup Form</h2>

    <p><span class="error">* required field</span></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>

        E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>

        Phone Number: <input type="text" name="phoneno" value="<?php echo $phoneno; ?>">
        <span class="error">* <?php echo $phonenoErr; ?></span>
        <br><br>

        Date of Birth: <input type="date" name="dob" value="<?php echo $dob; ?>">
        <span class="error">* <?php echo $dobErr; ?></span>
        <br><br>

        Other Info: <input type="text" name="otherinfo" value="<?php echo $otherinfo; ?>">
        <span class="error"><?php echo $otherinfoErr; ?></span>
        <br><br>

        Password: <input type="password" name="password">
        <span class="error">* <?php echo $passwordErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Sign Up">
    </form>

</body>

</html>