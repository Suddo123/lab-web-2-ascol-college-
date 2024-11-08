<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class bird{
        public $name;
        public $colors;
        public $habitats;
        public $eat;
        function __construct($name,$colors,$habitats,$eat){
            $this->name = $name;
            $this->colors =$colors;
            $this->habitats = $habitats;
            $this->eat = $eat;
        }
        function intro(){
            echo "{$this->name} is a bird that has {$this->colors} colors, lives with {$this->habitats} and eat {$this->eat} <br>";
        }
    }
    $pegion = new bird("Pegion","blue","human","grain");
    $crow = new bird("crow","black","human","meat and insect");
    $pegion ->intro();
    $crow ->intro();
    ?>
</body>
</html>