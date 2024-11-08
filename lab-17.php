<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculate the SI</h1>
    <form  method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" >
    Enter principal:<input type="text"name="principal">
    Enter rate: <input type="text" name="rate">
    Enter time: <input type="text" name="time">
    <input type="submit" value="intrest" name="intrest">
    </form>
    <?php 
    $principal ="";
    $rate ="";
    $time ="";
    if ($_SERVER ["REQUEST_METHOD"] === "POST"){
        if (isset($_POST["principal"])){
             $principal = $_POST["principal"];
        }
        if (isset($_POST["rate"])){
            $rate = $_POST["rate"];
       }
       if (isset($_POST["time"])){
        $time = $_POST["time"];
   }
   $si = ($principal*$rate*$time)/100;
   echo "<textarea readonly>$si is your intrset </textarea>";
    
}
    ?>
</body>
</html>