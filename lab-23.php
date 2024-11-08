
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //write an example of error handlers to print error
   function customErr($errno,$errstr){
    echo"<b> ERROR:</b> [$errno] $errstr";
    echo"ending scriupt";
    die();
   }
   set_error_handler("customErr",E_USER_WARNING);
    $t = 2;
    if($t>=1){
    trigger_error("value must be one or below 1",E_USER_WARNING);
    }
    ?>
</body>
</html> 