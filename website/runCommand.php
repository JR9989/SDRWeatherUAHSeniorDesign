<!-- downloadImages.php -->
<!-- Author: J.R. Stooksbury, Date: 4/24/23 -->
<!-- Run php commands -->
<?php
// Get command number from query string
$cmdNum = isset($_GET['cmd']) ? (int)$_GET['cmd'] : 1;

// Set names of output and PID files
$outputFile = "output$cmdNum.txt";
$pidFile = "pid$cmdNum.txt";

// Set commands to run
$cmds = array(
    1 => 'goesrecv -i 1 -v -c goesrecv.conf',
    2 => 'goesproc -c ~/goesproc.conf -m packet --subscribe tcp://0.0.0.0:5004',
);

// Get command to run
$cmd = isset($cmds[$cmdNum]) ? $cmds[$cmdNum] : '';

// Check if command is valid
if ($cmd !== '') {
    // Open output file for writing
    $fp = fopen($outputFile, 'w');

    // Open pipe to command
    $handle = popen($cmd, 'r');

    // Get status of process opened by popen()
    $status = proc_get_status($handle);

    // Check if status was returned successfully
    if ($status !== false) {
        // Get PID of parent process
        $ppid = $status['pid'];

        // Run ps command to get PID of shell command
        $output = array();
        exec("ps -o pid --no-headers --ppid $ppid", $output);

        // Get first line of output from ps command
        $line = isset($output[0]) ? $output[0] : '';

        // Get PID from line
        $pid = (int)$line;

        // Save PID to PID file
        if (!file_put_contents($pidFile, $pid)) {
            // Log error for debugging
            error_log("Failed to write PID to file $pidFile");
        }
    } else {
        // Log error for debugging
        error_log("Failed to get status of process opened by popen()");
    }

    // Read from pipe until it reaches end of file
    while (!feof($handle)) {
        // Read line from pipe
        $buffer = fgets($handle);

        // Write line to output file
        fwrite($fp, $buffer);
    }

    // Close pipe and output file
    pclose($handle);
    fclose($fp);
} else {
    // Log error for debugging
    error_log("Invalid command number: $cmdNum");
}
?>