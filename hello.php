<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Greetings!</title>
	<style> typw="text/css">
	.bold {
		font-weight: bolder;
	}
	</style>
</head>
<body>
<?php // Script 3.7 - hello.php

ini_set('display_errors', 1); //let me learn!
error_reporting(E_ALL); // show all problems

//Say "Hello":
$name = $_GET['name'];
print "<p> Hello, <span
class =\"bold\">$name</span!</p>";

?>
</body>
</html>
