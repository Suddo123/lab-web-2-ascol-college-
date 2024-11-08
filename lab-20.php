<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
       <thead>
        <tr>
            <th>Id</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Address</th>
        </tr>
       </thead>
 
    <?php
     $server = "localhost";
     $username = "root";
     $password = "";
     $dbname = "suresh_db";
     $conn = new mysqli($server,$username,$password,$dbname);
     if($conn->connect_error){
       die("connectrion not established".$conn->connect_error);
     }
    $sql = "SELECT * FROM `costumer_record` WHERE Address = 'pokhara' ";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo"<tr>";
            echo"<td>".$row['id'] ."</td>";
            echo"<td>".$row['First_name'] ."</td>";
            echo"<td>" .$row['Last_name']."</td>";
            echo"<td>".$row['Address'] ."</td>";
            echo"</tr>";
        }}
        $conn->close();
    ?>
       </table>
</body>
</html>