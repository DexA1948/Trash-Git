<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include File</title>
</head>
<body>
    <?php
    include "included.php";
    ?>

    <div>
        <h2>This is heading 2</h2>
        <p id="loremid" fontcolor="red">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, maiores nisi dolorum eveniet laborum inventore pariatur voluptatem illo ab ipsum neque earum labore officiis! Consequuntur, alias explicabo libero eveniet hic aspernatur molestias eaque architecto blanditiis. Nemo possimus dolore in.</p>
    </div>
</body>
<script>
    //jquery code
    $("#loremid").css('color', 'red');
</script>
</html>