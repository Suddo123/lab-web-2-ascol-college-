<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="lab-19.php"method="post">
    <label for="id">ID</label>
    <input type="text" name="id"><br>
    <label for="firstname">firstname</label>
    <input type="text" name="fname"><br>
    <label for="Lastname">Lastname</label>
    <input type="text" name="lname"><br>
    <label for="address">Address</label>
    <input type="text" name="address"><br>
     <input type="submit" value="ok">
    </form>
    <?php
     $server = "localhost";
     $username = "root";
     $password = "";
     $dbname = "suresh_db";
     $conn = new mysqli($server,$username,$password,$dbname);
     if($conn->connect_error){
       die("connectrion not established".$conn->connect_error);
     }
     else{
        $id = $_POST["id"];
        $firstname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $address = $_POST["address"];
        $sql = "INSERT INTO `costumer_record`(`id`, `First_name`, `Last_name`, `Address`) VALUES ('$id','$firstname','$lastname','$address')";
        $query = $conn->query($sql);

     }
     $conn->close();  
    ?>
</body>
</html>