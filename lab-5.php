
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Write a PHP program to check Armstrong number.</h1><br>
<?php
 //$a = (int)readline('enter a number :  ');
 $a=151;
 $sum = 0;
 $k=$a;
 while($k>0){
  $j = $k % 10;
  $sum+=$j*$j*$j;
  $k= (int)($k/10); 
 }
 if($a == $sum){
    echo 'The number ',$a,' is an armstrong number';
 }
 else {
    echo 'The number ', $a, ' is not an armstrong number';
}
?>
</body>
</html>