<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //variables
    $CharName = "DDK";
    $CharAge = 20;
    echo "<h1>name : $CharName</h1>";
    echo "<h1>age : $CharAge</h1>";
    $CharName = "D V Sai ";
    $CharAge = 21;
    echo "<h1>name : $CharName</h1>";
    echo "<h1>age : $CharAge</h1>";
    //data types
    $Name = "Duduka";
    $Age = 21;
    $gpa = 8.7;
    $isMale = true;
    echo $Name;
    echo "<br>";
    //Strings
    $phrase = "Giraffe Academy";

    echo strtoupper($phrase);
    echo "<br>";
    echo strtolower($phrase);
    echo "<br>";
    echo strlen($phrase);
    echo "<br>";
    echo $phrase[0];
    echo "<br>";
    $phrase[0] = "B";
    echo $phrase;
    echo "<br>";
    echo str_replace("Biraffe", "Panda", $phrase);
    echo "<br>";
    echo metaphone($phrase);
    echo "<br>";
    echo substr($phrase, 8, 4);
    echo "<br>";
    echo substr($phrase, 8);
    echo "<br>";
    $num = 10;
    echo $num;
    echo "<br>";
    echo $num + 10;
    echo "<br>";
    echo $num - 10;
    echo "<br>";
    echo $num * 10;
    echo "<br>";
    echo $num / 10;
    echo "<br>";
    echo $num % 10;
    echo "<br>";
    $num++;
    echo $num;
    echo "<br>";
    $num--;
    echo $num;
    echo "<br>";
    //$num=$num*10;
    $num *= 10;
    echo $num;
    echo "<br>";
    $number = abs(-100);
    echo $number;
    echo "<br>";
    echo pow($num, 4);
    echo "<br>";
    echo sqrt($number);
    echo "<br>";
    echo max($num, $number);
    echo "<br>";
    echo round(8.7);
    echo "<br>";
    echo ceil(8.34);
    echo "<br>";
    echo floor(8.7);

    // Getting user input
    

    ?>
    <form action="site.php" method="post">
        <h1>Register</h1>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="mob">Phone :</label>
        <input type="number" name="mob" id="mob" required>
        <br>
        <label for="Password">Password :</label>
        <input type="password" name="Password" id="Password" required>
        <br>
        <button type="submit">Submit</button>
    </form>
    <br>
    <?php
    echo $_POST["name"];
    echo "<br>";

    ?>
    <?php
    echo $_POST["mob"];
    echo "<br>";

    ?>
    <?php
    echo $_POST["Password"];
    echo "<br>";

    ?>
    //arrays
    <?php
    $Friends = array("Kevin", "Karen", "Oscar", "Jim");
    $Friends[1] = "Dwight";
    echo $Friends[1];
    ?>
    //check box
    <form action="site.php" method="post">
        Apple : <input type="checkbox" name="fruits[]" value="apple"><br>
        Orange : <input type="checkbox" name="fruits[]" value="orange"><br>
        Banana : <input type="checkbox" name="fruits[]" value="banana"><br>
        <button type="submit">Submit</button>
    </form>
    <?php
    $fruits = $_POST["fruits"];
    echo $fruits[0];
    ?>
    <br>
    //associative arrays
    <form action="site.php" method="post">
        Student Name :<input type="text" name="student">
        <button type="submit">Submit</button>
    </form>
    <br>
    <?php
    $grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");
    echo $grades[$_POST["student"]];
    ?>
    <br>
    //functions

    
    <form action="site.php" method="post">
       Your  Name <input type="text" name="name">
        <br>
        
        <button  type="submit">Submit</button>
    </form>
    <?php
    function sayHi($name)
    {
        echo "Hello $name";
    }
    sayHi($_POST["name"]);
    echo "<br>";
?>
<!-- return statement -->
<?php
function cube($num)
{
    return $num * $num * $num;
}
$result=cube(4);
echo $result;
echo "<br>";
?>
<!-- if statement -->

<?php
$isFemale=false;
$isShort=false;
if($isFemale && $isShort){
    echo "You are a Female and you areshort";
}
elseif($isFemale && !$isShort){
    echo "You are a female but not short";
}
elseif(!$isFemale && $isShort){
    echo "You are not Female but you are short";
}
else {
    echo "You are a Male and you are Tall";
}
?>
<br>
<!-- if statement Comparision -->
<?php
function getMax($num1,$num2,$num3){
    if($num1>$num2 && $num1>$num3){
        return $num1;
    }
    elseif($num2>$num1 && $num2>$num3){
        return $num2;
    }
    else{
        return $num3;
    }
}
$result=max(10,20,30);
echo $result;
echo "<br>";
?>
 <hr>
  <!-- While and Do-while Loops -->
  <?php
    $index = 6;
    while($index <= 5) {
      echo "$index <br>";
      $index++;
    }
    
    do {
      echo "$index <br>";
      $index++;
    } while($index <= 5);
    echo "<br>"
  ?>
  <hr>
  <!-- For Loops -->
  <?php
    $index = 0;
    $arr = array(4, 8, 16, 24, 32);
    for($index /* or $i = 1 (initialize new variable) */; $index < count($arr); $index++) {
      // echo "$index <br>";
      echo "$arr[$index] <br>";
    }
  ?>
  <!-- include Html -->
   <?php
     include"index.html";
     ?>
  <!-- include php -->
   <?php
     include"body.php";
     ?>
    <!-- classes and objects using constructor  -->
    <?php
    class Book {
        var $title;
        var $author;
        var $pages;
    
    function __construct($atitle,$aauthor,$apages){
        $this->title = $atitle;
        $this->author = $aauthor;
        $this->pages = $apages;

    }
}
$book1 = new Book("Harry Potter","JK Rowling",400);
$book2 = new Book("React","Anonymus",4000);
echo $book1->title;
echo "<br>";
echo $book2->title;
echo "<br>";
echo $book1->author;
echo "<br>";
    
echo $book2->author;
echo "<br>";
echo $book1->pages;
echo "<br>";
echo $book1->title;
echo "<br>";

echo $book2->title;
echo "<br>";
echo $book1->author;
echo "<br>";


echo $book2->author;    
echo "<br>";
echo $book1->pages;
echo "<br>";




    echo $book1->title;
    echo "<br>";
    echo $book2->title;                                                                     
    echo "<br>";


    ?>
      <!-- Object Functions -->
  <?php
    class Student {
      var $name;
      var $major;
      var $gpa;

      function __construct($name, $major, $gpa) {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
      }

      function hasHonors() {
        if ($this->gpa  >= 3.5) {
          return "true";
        }
        return "false";
      }
    }
    $student1 = new Student("Jim", "Business", 2.8);
    $student2 = new Student("Pam", "Art", 3.6);
    // $student2->gpa = 2.5;
    echo $student2->hasHonors();
  ?>
  <br>
<!-- Getters and Setters -->
<?php
      class Movie {
        public $title;
        private $rating;

        function __construct($title, $rating) {
          $this->title = $title;
          $this->setRating($rating);
        }

        function getRating() {
          return $this->rating;
        }

        function setRating($rating) {
          if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
            $this->rating = $rating;
          } else {
            $this->rating = "NR";
          }
        }
      }
      $avengers = new Movie("Avengers", "Dog");
      // $avengers->setRating("Avengers - Level Threat");
      echo $avengers->getRating();
      echo "<hr>";
    ?>
</body>
</html>