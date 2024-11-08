<?php
    $cookie_name = "user";
    $cookie_value = "nikhilupreti";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  // Check if the cookie is set before accessing it
  if (isset($_COOKIE[$cookie_name])) {
      echo "Cookie value is: " . $_COOKIE[$cookie_name];
  } else {
      echo "Cookie is not set!";
  }
  ?>
</body>
</html>