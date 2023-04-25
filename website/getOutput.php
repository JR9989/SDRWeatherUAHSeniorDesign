<!-- downloadImages.php -->
<!-- Author: J.R. Stooksbury, Date: 4/24/23 -->
<!-- Gets php commands output -->
<?php
// Get command number from query string
$cmdNum = isset($_GET['cmd']) ? (int)$_GET['cmd'] : 1;

// Set name of output file
$outputFile = "output$cmdNum.txt";

// Check if output file exists and is readable
if (is_readable($outputFile)) {
    // Read contents of output file if it exists and is readable
    $output = file_get_contents($outputFile);
} else {
    // Set output to empty string if file doesn't exist or isn't readable
    $output = '';
}

// Return output as JSON object
echo json_encode(array('output' => $output));
?>