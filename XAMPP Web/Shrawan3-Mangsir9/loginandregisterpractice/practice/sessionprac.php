<?php
    session_name('deshant');
    session_id('deshant01');
    session_start();

    if (!isset($_SESSION['count'])){
        $_SESSION['count'] = 0;
    } 
    // else {
    //     $_SESSION['count']++;
    // }
    session_write_close();
    $count = $_SESSION['count'];
?>

<html>
    <head>
        <title>Session Practice</title>
    </head>

    <body>
        <div class="sessioninfo">
            <p>Your session id is: <?=session_id()?></p>
            <p>Your session count is: <?=$count++?></p>
            <pre>
                <?php print_r($_SESSION); ?>
            </pre>
        </div>
    </body>
</html>

<?php
    session_name('deshant');
    session_id('deshant01');
    session_start();

    $_SESSION['count'] = $count;

    session_write_close();
?>