<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Write a PHP program to print Even or odd number</h1><br>
    <?php
    //$a = (int)readline('Enter th Number'); To take input as intiger 
    $a=10;
    if($a%2 == 0){
        echo 'Tne number ',$a,' is even';
    }
    else {
        echo 'Tne number ',$a,' is odd';
    }
    ?>
</body>
</html>