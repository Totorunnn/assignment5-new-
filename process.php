<?php
// Get input values from the URL parameters
$a = isset($_GET['a']) ? $_GET['a'] : '';
$b = isset($_GET['b']) ? $_GET['b'] : '';
$c = isset($_GET['c']) ? $_GET['c'] : '';
$d = isset($_GET['d']) ? $_GET['d'] : '';
$e = isset($_GET['e']) ? $_GET['e'] : '';

// Prepare the command to execute the Python script with parameters
$command = "python3 /var/www/html/data_management.py " . escapeshellarg($a) . " " . escapeshellarg($b) . " " . escapeshellarg($c) . " " . escapeshellarg($d) . " " . escapeshellarg($e);
$output = shell_exec($command . " 2>&1");

// Display output with labels
echo "<h2>Results:</h2>";
echo $output ? $output : "<p>Error: No output received from Python script.</p>";
?>
