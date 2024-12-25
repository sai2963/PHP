<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="map-lib-game.php" method="GET">
        COLOR:<input type="texr" name="color"placeholder="color"><br>
        PLURAL NOUN:<input type="texr" name="pluralnoun"placeholder="Plural Noun"><br>
        CELEBRITY:<input type="texr" name="celebrity"placeholder="Celebrity"><br>
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
    <?php
    $Color = $_GET["color"];
    $PluralNoun = $_GET["pluralnoun"];
    $Celebrity = $_GET["celebrity"];
    echo "Roses are $Color <br>";
    echo "$PluralNoun are blue <br>";
    echo "I love $Celebrity <br>";
    ?>

    </form>
</body>
</html>