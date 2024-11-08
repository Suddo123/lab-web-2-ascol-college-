<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
     $server = "localhost";
     $username = "root";
     $password = "";
     $dbname = "suresh_db";
     $conn = new mysqli($server,$username,$password,$dbname);
     if($conn->connect_error){
       die("connectrion not established".$conn->connect_error);
     }
     $conn->close();
     ?>
</body>
</html>