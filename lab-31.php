<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display CSV Data</title>
</head>
<body>
    <?php
    // Open the CSV file
    $csv = fopen("file.csv", "r");
    
    // Check if the file opened successfully
    if ($csv !== false) {
    ?>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
            </tr>
            <?php
            // Read each row of the CSV file
            while (($data = fgetcsv($csv, 1000, ",")) !== false) {
                if (!empty($data)) {
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($data[0]); ?></td>
                        <td><?php echo htmlspecialchars($data[1]); ?></td>
                        <td><?php echo htmlspecialchars($data[2]); ?></td>
                    </tr>
                    <?php
                }
            }
            // Close the CSV file
            fclose($csv);
            ?>
        </table>
    <?php
    } else {
        echo "Error opening the CSV file.";
    }
    ?>
</body>
</html>
