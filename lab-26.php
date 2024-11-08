<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //illustrate with an example, how top level handler can handel exception without catch block
    function myException($exception){
        echo"<b>Exception: </b>".$exception->getMessage();
    }
    set_exception_handler('myException');
    throw new Exception('uncaught exception occured');
    ?>
</body>
</html>