<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $_SESSION["favcolor"] = "red";
    $_SESSION["animal"] = "dog";
    ?>
    <?php
    echo "favcolor is ". $_SESSION["favcolor"]."<br>";
    echo "animal is ".   $_SESSION["animal"]."<br>";
    ?>

    <?php
    //remove all variable 
    session_unset();
    //destroy the session  
    session_destroy();
    if(!($_SESSION["favcolor"])){
        echo "session destory";
    }
    ?>
</body>
</html>