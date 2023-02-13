<?php 
if ($_GET['run']) {
		$output = exec("ls -la");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hello</title>
</head>
<body>
	<a href="?run=true">Click me</a>
	<p><?php echo "$output" ?></p>
</body>
</html>