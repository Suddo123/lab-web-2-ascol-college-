
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Write a PHP program to print factorial of a number.</h1><br>
    <?php
   // $a = (int)readline('enter a number :  ');
   $a=13;
    $fact = 1;
    for($i=1;$i<=$a;$i++){
        $fact = $fact * $i;
    }
    echo 'the given number  ',$a,' factorial is a ',$fact;
    ?>
</body>
</html>