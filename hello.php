<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "header.php"
    //    echo("<h1>CALCULATOR</h1>"); 인클루딩하니까 안됨 
       
    ?>
    <H2>PLUS</H2>
    <form action="hello.php" method="GET"> 
       <!-- <input type="number" name="num1" >
       <br>
       //step
       <input type="number" step="0.001" name="num2" >
       <input type="submit"> -->
       <input type="text" name="color" >
       <br>
       <input type="text" name="point" >
       <input type="submit">
    </form>
    ANSWER: 
    <!-- <?php echo $_GET["num1"] + $_GET["num2"]; ?> -->
    <h2>how about this sentence </h2>
    <?php
       $color =$_GET["color"];
       $point = $_GET["point"];
       
      
       echo " Roses ar $color <Br>";
       echo "The charming point is $point" ; 

       // array에 key - value로 저장 
       $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
       echo "<br><br>";
       echo $grades["Jim"];

       // function 만드릭
       function sayHi($name){
           echo "<h2>Hello, $name. have a nice day!</h2>";
       }
       sayHi("hs");

       //for문
       $lottery = array(3,5,16,25,27,48,50);
       for($i=0; $i< count($lottery); $i++){
           echo "$lottery[$i] <br>";
       }

       //클래스
       class Movie{
           public $title;
           public $rating;

           function __construct($title, $rating){
               $this-> title = $title;
               $this-> rating = $rating;
           }
       }

       $avengers = new Movie("avengers", 3);
       echo "<Br> movie title: $avengers->title, rating: $avengers->rating";
    // overriding, inheritance
    class Chef{
        function makeChicken(){
            echo "<br>The chef makes chicke<br>";
        }
        function makeSalad($nameOfChef){
            echo "<br>The $nameOfChef chef makes Salad<br>";
        }
        function makeStew(){
            echo "<br>The chef makes stew<br>";
        }
    }
    
    class ItanlianChef extends Chef{
        function makeStew(){
            echo "<br>The chef makes Italian style stew<br>";
        }
    }

    $chef1 = new Chef();
    $chef1->makeSalad("chef1");
    $chef1->makeStew();


    $chef2 = new ItanlianChef();
    $chef2->makeSalad("chef2");
    $chef2->makeStew();

    
    ?>

</body>
</html>