<?php
/**
 * Execute the given command by displaying console output live to the user.
 *  @param  string  cmd          :  command to be executed
 *  @return array   exit_status  :  exit status of the executed command
 *                  output       :  console output of the executed command
 */
function liveExecuteCommand($cmd)
{

    while (@ ob_end_flush()); // end all output buffers if any

    $proc = popen("$cmd 2>&1 ; echo Exit status : $?", 'r');

    $live_output     = "";
    $complete_output = "";

    while (!feof($proc))
    {
        $live_output     = fread($proc, 4096);
        $complete_output = $complete_output . $live_output;
        echo $live_output;
        @ flush();
    }

    pclose($proc);

    // get exit status
    preg_match('/[0-9]+$/', $complete_output, $matches);

    // return exit status and intended output
    return array (
                    'exit_status'  => intval($matches[0]),
                    'output'       => str_replace("Exit status : " . $matches[0], '', $complete_output)
                 );
}
?>
<?php 
if ($_GET['run']) {
		$result = liveExecuteCommand('ping google.com');

		if($result['exit_status'] === 0){
		   // do something if command execution succeeds
		} else {
		    // do something on failure
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hello</title>
	<style>
		body {
			background:url('images/space_bg.gif') repeat fixed center;
			text-align: center;
			font-family: Arial, Helvetica, sans-serif;
		}
		a {
			background-color: gray;
			color: white;
			font-weight: bold;
			font-size: 24px;
			padding: 10px;
		}
		a:hover {
			background-color: silver;
		}
		a:visted {
			color: white;
		}
		h1 {
			color: white;
		}
		p {
			margin: auto;
			width: 800px;
			height: 1200px;
			position: relative;
			background-color: white;

		}
		div {
			margin: auto;
			text-align: center;
			position: relative;
		}
	</style>
</head>
<body>
	<div>
		<h1>Satellites</h1>
		<a href="?run=true">Click me</a><br>
		<br>
		<p><?= $error; ?>
			<?php echo nl2br($live_output) ?></p>
	</div>

</body>
</html>