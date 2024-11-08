<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Write your information using Php Function</h1>
    <?php
    function displayMyInfo(){
        $Name = 'Suresh';
        $roll_no = 2016;
        $field = 'BIT';
        $Semester = '5th';
        echo 'Name: ',$Name,'<br>','Roll_no: ',$roll_no,'<br>','Field: ',$field,'<br>','Semester: ',$Semester;

    }
    displayMyInfo();
    ?>
</body>
</html>