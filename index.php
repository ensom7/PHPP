<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>классы и объекты</title>
</head>
<body>
<div class="animals">
<?php
    class Animal {
        public $weight,$age,$color;
    }
    class Lion extends Animal{
        public $canine_length;
        function do(){
            echo "<h2>Лев</h2><br>"."<h3>".$this->canine_length." - длина клыка</h3><br>"."<h3>".$this->weight ." - вес</h3><br>" ."<h3>".$this->age ." - возраст</h3><br>"."<h3>".$this->color ." - окрас</h3><br>";
        }
    }
    class Rabbit extends Animal{
        public $ear_length;
        function do(){
            echo "<h2>Кролик</h2><br>"."<h3>".$this->ear_length." -длина ушей</h3><br>"."<h3>".$this->weight ." - вес</h3><br>"."<h3>". $this->age ." - возраст</h3><br>"."<h3>".$this->color ." - окрас</h3><br>";
        }
    }
    class Wolf extends Animal{
        public $tail_length;
        function do(){
            echo "<h2>Волк</h2><br>"."<h3>".$this->tail_length." -длина хвоста</h3><br>"."<h3>".$this->weight ." - вес</h3><br>"."<h3>". $this->age ." - возраст</h3><br>"."<h3>".$this->color ." - окрас</h3><br>";
        }
    }


    $lion = new Lion();
    $lion->canine_length = "10см";
    $lion->weight = "150";
    $lion->age = "5";
    $lion->color = "orange";
    $weightLion = $lion->weight;
    $ageLion = $lion->age;
    $colorLion = $lion->color;
    $lion->do();  
    
    echo "<br>";
    
    $rabbit = new Rabbit();
    $rabbit->ear_length = "15см";
    $rabbit->weight = "2";
    $rabbit->age = "2";
    $rabbit->color = "gray";
    $weightRabbit = $rabbit->weight;
    $ageRabbit = $rabbit->age;
    $colorRabbit = $rabbit->color;
    $rabbit->do();  
    
    echo "<br>";
      
    $wolf = new Wolf();
    $wolf->tail_length = "15см";
    $wolf->weight = "40";
    $wolf->age = "10";
    $wolf->color = "gray";
    $weightWolf = $wolf->weight;
    $ageWolf = $wolf->age;
    $colorWolf = $wolf->color;
    $wolf->do();  

    
?>
</div>
</body>
</html>