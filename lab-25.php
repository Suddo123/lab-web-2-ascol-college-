<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //write an example to demonstrate handaling multiple exception 
    class CustomException1 extends Exception {}
    class CustomException2 extends Exception {}

    function checkNumber($num) {
        if ($num > 10) {
            throw new CustomException1("Number is too large.");
        } elseif ($num < 5) {
            throw new CustomException2("Number is too small.");
        }
        return true;
    }

    try {
        $num = 6; // Change this value to test different cases
        checkNumber($num);
        echo "The number is within range.<br>";
    } catch (CustomException1 $e) {
        echo "Caught CustomException1: " . $e->getMessage() . "<br>";
    } catch (CustomException2 $e) {
        echo "Caught CustomException2: " . $e->getMessage() . "<br>";
    } catch (Exception $e) {
        // This will catch any other exceptions that are not handled explicitly
        echo "Caught Exception: " . $e->getMessage() . "<br>";
    } finally {
        echo "Final block executed regardless of exceptions.";
    }
    ?>
</body>
</html>