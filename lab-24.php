<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //writea custom exception in php to confirm only student above 18 years can vote in college election
    class customException extends Exception{
        public function errorMessage(){
            $errorMsg = "<b> you are not eligible to vote </b>";
            return $errorMsg;
        }
    }
         $age = 15;
         try {
            if ($age<18){
                throw new customException($age);
            }
         }
         catch (customException $e){
            echo $e->errorMessage();
         }
    ?>
</body>
</html>