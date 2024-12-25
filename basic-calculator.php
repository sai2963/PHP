<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="num1" placeholder="Number 1">
        <br>
        <input type="text" name="num2" placeholder="Number 2">
        <br>
        <select name="operator" required>
            <option value="none">None</option>
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    Answer: 
    <?php
    if(isset($_GET['submit'])) {
        if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operator'])) {
            $num1 = floatval($_GET['num1']);
            $num2 = floatval($_GET['num2']);
            $operator = $_GET['operator'];
            
            switch($operator) {
                case 'add':
                    echo $num1 + $num2;
                    break;
                case 'subtract':
                    echo $num1 - $num2;
                    break;
                case 'multiply':
                    echo $num1 * $num2;
                    break;
                case 'divide':
                    if($num2 != 0) {
                        echo $num1 / $num2;
                    } else {
                        echo "Cannot divide by zero!";
                    }
                    break;
                default:
                    echo "Please select an operator";
            }
        }
    }
    ?>
</body>
</html> 