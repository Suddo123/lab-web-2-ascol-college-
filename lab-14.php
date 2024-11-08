<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Remove specific element by value in an array</h1>
    <?php
    $fruits = ['red'=>'apple','orange'=>'orange','yellow'=>'banana','black'=>'Grapes'];
    print_r($fruits);
    echo '<br>';
    $key = array_search('banana', $fruits);
    if($key !== false){
        unset( $fruits[$key] );
    }
    print_r($fruits);
    ?>
</body>
</html>