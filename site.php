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
</body>
</html>