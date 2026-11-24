<html>
<body>
<form method="post">
    Enter First Number:
    <input type="number" name="n1" required><br><br>

    Enter Second Number:
    <input type="number" name="n2" required><br><br>

    Select Operation:
    <select name="op">
        <option value="+">Addition</option>
        <option value="-">Subtraction</option>
        <option value="*">Multiplication</option>
        <option value="/">Division</option>
    </select><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if(isset($_POST['submit']))
{
    $a = $_POST['n1'];
    $b = $_POST['n2'];
    $op = $_POST['op'];

    switch($op)
    {
        case "+":
            echo "Addition = ".($a+$b);
            break;

        case "-":
            echo "Subtraction = ".($a-$b);
            break;

        case "*":
            echo "Multiplication = ".($a*$b);
            break;

        case "/":
            if($b != 0)
                echo "Division = ".($a/$b);
            else
                echo "Division by zero is not possible";
            break;
    }
}
?>
</body>
</html>
