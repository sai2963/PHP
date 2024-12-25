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


    ?>
</body>
</html>