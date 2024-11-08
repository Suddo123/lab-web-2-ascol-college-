
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Write a PHP program to print Fibonacci series without using recursion and using recursion.</h1>
    <br>
    <?php
    //$a = (int)readline('enter a number :  ');
    $a=12;
    for($i=0;$i<$a;$i++){
        echo fibonacci($i),',';
    }
    function fibonacci($b){
        if($b == 0){
            return 0;
        }

         else if($b == 1){
            return 1;
        }
        else{
            return fibonacci($b-1)+fibonacci($b-2);
        }
    }
   
    ?>
</body>
</html>