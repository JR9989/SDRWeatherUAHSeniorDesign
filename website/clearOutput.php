<!-- downloadImages.php -->
<!-- Author: J.R. Stooksbury, Date: 4/24/23 -->
<!-- Clears php commands -->
<?php
// Get command number from query string
$cmdNum = isset($_GET['cmd']) ? (int)$_GET['cmd'] : 1;

// Set names of output and PID files
$outputFile = "output$cmdNum.txt";
$pidFile = "pid$cmdNum.txt";

// Clear contents of output and PID files
file_put_contents($outputFile, '');
file_put_contents($pidFile, '');
?>