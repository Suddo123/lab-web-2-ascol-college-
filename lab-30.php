<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// File path where the CSV will be saved
$file = "file.csv";

// Open the file for writing ('w' mode will overwrite existing content)
$handle = fopen($file, 'w');

// Check if the file opened successfully
if ($handle === false) {
    die('Error opening the file for writing');
}

// Data to be written to the CSV file (array of arrays, each inner array represents a row)
$data = [
    ['Name', 'Age', 'Email'], // Header row
    ['John Doe', 28, 'john.doe@example.com'],
    ['Jane Smith', 32, 'jane.smith@example.com'],
    ['Sam Johnson', 45, 'sam.johnson@example.com'],
];

// Write each row of data into the CSV file
foreach ($data as $row) {
    fputcsv($handle, $row);
}

// Close the file
fclose($handle);

echo "Data written to $file successfully.";
?>

</body>
</html>