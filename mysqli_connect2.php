<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Connect to MySQL </title>
</head>
<body>
<?php //Script 12.2 mysqli_connect.php

//Attempts to connect to MySQL and print out messages
if ($dbc = mysqli_connect('localhost', 'root', 'newpassword', 'myblog')) {
	
	print '<p>Successfully connected to the database!</p>';
	
	mysqli_close($dbc); //Close the connection
} else {
	
	print '<p stye="color: red;">Could not connect to the database:<br>' .mysqli_connect_error() . '.</p>';
}

?>
</body>
</html>
