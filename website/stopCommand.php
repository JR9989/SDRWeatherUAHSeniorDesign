<!-- downloadImages.php -->
<!-- Author: J.R. Stooksbury, Date: 4/24/23 -->
<!-- Stops php commands -->
<?php
// Get command number from query string
$cmdNum = isset($_GET['cmd']) ? (int)$_GET['cmd'] : 1;

// Set name of PID file
$pidFile = "pid$cmdNum.txt";

// Check if PID file exists and is readable
if (is_readable($pidFile)) {
    // Read PID from PID file
    $pid = (int)file_get_contents($pidFile);

    // Send SIGTERM signal to process to terminate it
    posix_kill($pid, SIGTERM);
}
?>