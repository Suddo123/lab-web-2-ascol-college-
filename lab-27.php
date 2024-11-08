<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Suspension Example</title>
</head>
<body>
    <?php
    // Example of error without suspension
    echo "Without Error Suspension:<br>";
    $file = fopen("nonexistentfile.txt", "r");  // This will generate a warning since the file doesn't exist

    echo "<br><br>";

    // Example of error suspension using '@' operator
    echo "With Error Suspension:<br>";
    $file_suppressed = @fopen("nonexistentfile.txt", "r");  // The '@' operator suppresses the error

    if ($file_suppressed === false) {
        echo "File could not be opened, but no warning is displayed.<br>";
    }
    ?>
</body>
</html>
