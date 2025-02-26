<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Registration</title>
	<style type ="text/css" media="screen">
		.error {color: red;}
	</style>
</head>
<body>
<h1> Registration Results</h1>
<?php //Script 6.2 - handle_reg.php

//Address Error Management
ini_set('display_errors', 1);
error_reporting(E_ALL); //shows all possible problems

//Flag variable to track success:
$okay = true;

//Validate the email address:
if (empty($_POST['email'})) {
	print '<p class="error">Please enter your email address.</p>';
	$okay = false;
}

//Validate the password:
if (empty($_POST['password'])) {
	print '<p class="error"> Please enter your password.</p>';
	$okay = false;
}

//If there were no errors, print a success message:
if ($okay) {
	print '<p> You have been successfully registered!</p>'; 
}
?>
</body>
</html>
