<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP-Calculator</title>
</head>
<body>
    <form action="calculate.php" method="post">
        <h4>Number 1</h4>
        <input type="text" name = "num1"><br><br>
        <h4>Number 2</h4>
        <input type="text" name = "num2"><br><br>
        <select name="operator">
            <option value="add">Add</option>
            <option value="sub">Subtraction</option>
            <option value="mul">Multiply</option>
            <option value="div">Division</option>
        </select>
        <input type="submit" name="calculate">
    </form>
</body>
</html>