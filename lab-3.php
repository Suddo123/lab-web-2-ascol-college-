
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Write a PHP program to check prime number.</h1> <br>
    <?php
   // $a = (int)readline('enter a number :  ');
   $a=10;
    $flag = 0;
    for($i=1;$i<=$a;$i++){
        if($a%$i == 0 ){
            $flag++;
        }
    }
    if($flag == 2){
        echo 'the given number ',$a,' is a prime number';
    }
    else{
        echo 'the given number ',$a,' is not a prime number';
    }
    ?>
</body>
</html>