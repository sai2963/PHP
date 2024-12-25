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
        $Name= "Duduka";
        $Age=21;
        $gpa=8.7;
        $isMale=true;
        echo $Name;  
        echo "<br>"; 
        //Strings
        $phrase="Giraffe Academy"; 
        
        echo strtoupper($phrase);
        echo "<br>";
        echo strtolower($phrase);
        echo "<br>";
        echo strlen($phrase);
        echo "<br>";
        echo $phrase[0];
        echo "<br>";
        $phrase[0]= "B";
        echo $phrase;
        echo "<br>";
        echo str_replace("Biraffe","Panda",$phrase);
        echo "<br>";
        echo metaphone($phrase);
        echo "<br>";
        echo substr($phrase,8,4);
        echo "<br>";
        echo substr($phrase,8);
        echo "<br>";
        $num=10;
        echo $num;
        echo "<br>";
        echo $num +10;
        echo "<br>";
        echo $num -10;
        echo "<br>";
        echo $num *10;
        echo "<br>";
        echo $num /10;
        echo "<br>";
        echo $num %10;
        echo "<br>";
        $num++;
        echo $num;
        echo "<br>";
        $num--;
        echo $num;
        echo "<br>";
        //$num=$num*10;
        $num*=10;
        echo $num;
        echo "<br>";
        $number = abs(-100);
        echo $number;
        echo "<br>";
        echo pow($num,4);
        echo "<br>";
        echo sqrt($number);
        echo "<br>";
        echo max($num,$number);
        echo "<br>";
        echo round(8.7);
        echo "<br>";
        echo ceil(8.34);
        echo "<br>";
        echo floor(8.7);

    ?>
</body>
</html>