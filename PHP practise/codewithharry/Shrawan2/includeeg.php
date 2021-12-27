<html>

<head>
    <title>Example of Include</title>
</head>

<body>
    <div style="color: red; background-color:gray">
    <h1>Include</h1>
    </div>

    <?php
    include "ObjectIteration.php";

    foreach($deshant as $key => $value):
        echo "<br> $key => $value";
    endforeach;

    ?>
</body>

</html>