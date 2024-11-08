
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Write a PHP program to reverse given number.</h1><br>
    <?php
    //$a = (int)readline('enter a number :  ');
    $a=13;
    $i= $a;
    function revers($i){
    $reverse = 0;
    while($i>0){
        $j= $i%10;
        $reverse = $reverse *10 + $j;
        $i = (int)($i/10);
    }
    return $reverse;
}
echo 'The reverse is ',revers($i);
    ?>
</body>
</html>