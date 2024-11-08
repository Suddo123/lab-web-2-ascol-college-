<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Open the file that contains numbers 1 to 10
    $myfile = fopen("file.txt", "r");

    // Open two files for writing: odd.txt and even.txt
    $oddfile = fopen("odd.txt", "w");
    $evenfile = fopen("even.txt", "w");

    // Loop through the file line by line
    while (!feof($myfile)) {
        $a = fgets($myfile);
        
        // Remove any whitespace or newline characters
        $a = trim($a);

        // Ensure the line contains a number
        if (is_numeric($a)) {
            // Convert to an integer
            $num = (int)$a;

            // Check if the number is even or odd and write accordingly
            if ($num % 2 == 0) {
                fwrite($evenfile, $num . "\n");
            } else {
                fwrite($oddfile, $num . "\n");
            }
        }
    }

    // Close all the files
    fclose($myfile);
    fclose($oddfile);
    fclose($evenfile);
    ?>
</body>
</html>
