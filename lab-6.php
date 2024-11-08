<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Write a PHP program to check Pallindrome number.</h1><br>
    <?php
     //$a = (int)readline('enter a number :  ');
     $a = 16461;
     $k = $a;
     $sum =0;
     
     while($k>0){
        $j=$k%10;
        $sum = $sum*10+$j;
        $k=(int)($k/10); 
     }
     if ($a == $sum){
        echo 'the number ',$a,' is a pallindrome number';
     }
     else {
        echo 'The number ', $a, ' is not a palindrome number';
    }
    ?>
</body>
</html>