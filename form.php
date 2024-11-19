<?php
echo '<!DOCTYPE html>
<html>
<head>
    <title>Data Management Form</title>
</head>
<body>
    <h1>Input Numbers</h1>
    <form action="process.php" method="get">
        <label for="a">Number A:</label>
        <input type="number" name="a" required><br>
        <label for="b">Number B:</label>
        <input type="number" name="b" required><br>
        <label for="c">Number C:</label>
        <input type="number" name="c" required><br>
        <label for="d">Number D:</label>
        <input type="number" name="d" required><br>
        <label for="e">Number E:</label>
        <input type="number" name="e" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>';

