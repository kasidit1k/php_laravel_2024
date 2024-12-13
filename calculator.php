<h1>Calculator</h1>

<?php
if (isset($_POST['operator'])) {
    $operator = $_POST['operator'];
    $x = $_POST['x'];
    $y = $_POST['y'];

    if ($operator == '+') {
        $result = $x + $y;
    } else if ($operator == '-') {
        $result = $x - $y;
    } else if ($operator == '*') {
        $result = $x * $y;
    } else if ($operator == '/') {
        $result = $x / $y;
    } else if ($operator == '%') {
        $result = $x % $y;
    }

    echo "$x $operator $y = $result";
}
?>

<form action="calculator.php" method="post">
    <input type="number" name="x" placeholder="Enter your number">
    <input type="number" name="y" placeholder="Enter your number">  
    <input type="submit" name="operator" value="+">
    <input type="submit" name="operator" value="-">
    <input type="submit" name="operator" value="*">
    <input type="submit" name="operator" value="/">
    <input type="submit" name="operator" value="%">
</form>