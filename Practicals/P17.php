<!DOCTYPE html>
<html>
<head>
    <title>Basic Calculator</title>
</head>
<body>
    <h2>Basic Calculator</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="text" name="num1" placeholder="Enter number 1" required><br><br>
        <input type="text" name="num2" placeholder="Enter number 2" required><br><br>
        <select name="operator">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select><br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        switch($operator){
            case "add":
                $result = $num1 + $num2;
                echo "Result: $num1 + $num2 = $result";
                break;
            case "subtract":
                $result = $num1 - $num2;
                echo "Result: $num1 - $num2 = $result";
                break;
            case "multiply":
                $result = $num1 * $num2;
                echo "Result: $num1 * $num2 = $result";
                break;
            case "divide":
                if($num2 == 0){
                    echo "Cannot divide by zero!";
                } else {
                    $result = $num1 / $num2;
                    echo "Result: $num1 / $num2 = $result";
                }
                break;
            default:
                echo "Invalid operator";
        }
    }
    ?>
</body>
</html>
