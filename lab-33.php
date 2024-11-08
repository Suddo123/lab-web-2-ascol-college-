<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $json = file_get_contents("file.json");
    $json_data = json_decode($json,true);
    print_r($json_data);
    ?>
</body>
</html>