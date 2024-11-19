<?php
// This file is part of a project being versioned with Git.
// Changes and updates to this code will be managed through branches,
// allowing us to work on new features without affecting the main version of the project.
?>


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

