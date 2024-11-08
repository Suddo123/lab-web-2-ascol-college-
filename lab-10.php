<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Find cube of given numbers using functions</h1>
    <?php
    $a = 5;
    function cube($b){
        $cube_num = 1;
          for($i=0;$i<=2;$i++){
                 $cube_num*= $b;
          }
          echo $cube_num,' is a cube of ',$b;
    }
    cube($a);
    ?>
</body>
</html>