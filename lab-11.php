<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Write a progarm to pass an argument and return value</h1>
    <?php
    $a =5;
    $b= 3;
    function sum($x,$y){
        $s = $x + $y;
        return $s;
    }
    $c= sum($a,$b);
    echo 'The sum is ',$c;
    ?>
</body>
</body>
</html>