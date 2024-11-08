<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Define the data to be written to the JSON file
$data = [
    ["name" => "John Doe", "age" => 28, "email" => "john.doe@example.com"],
    ["name" => "Jane Smith", "age" => 32, "email" => "jane.smith@example.com"],
    ["name" => "Sam Johnson", "age" => 45, "email" => "sam.johnson@example.com"]
];

// Convert the PHP array to JSON format
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Specify the file path where the JSON will be saved
$file = "file.json";

// Open the file for writing (if the file doesn't exist, it will be created)
$handle = fopen($file, 'w');

// Write the JSON data to the file
if (fwrite($handle, $jsonData) === false) {
    echo "Error writing to the file.";
} else {
    echo "Data successfully written to $file.";
}

// Close the file
fclose($handle);
?>

</body>
</html>