<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class bike {
        public $name;
        public $type;
        function __construct($name,$type){
            $this->name = $name;
            $this->type = $type;
        }
        function display(){
            echo $this->name.": is a ".$this->type."<br>";
        }
    }
     $hayabusha = new bike("hayabusha","super bike");
     $honda = new bike("honda","common bike");
     $hayabusha->display();
     $honda->display();
    ?>
</body>
</html>