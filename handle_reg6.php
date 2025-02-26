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
if (empty($_POST['email'])) {
	print '<p class="error">Please enter your email address.</p>';
	$okay = false;
}

//Validate the password:
if (empty($_POST['password'])) {
	print '<p class="error"> Please enter your password.</p>';
	$okay = false;
}

//Check the two passwords for equality: 
if ($_POST['password'] !=$_POST['confirm']) {
	print '<p class="error"> Your passwords do not match. Try again.</p>';
	$okay = false;
}
//Validate the birth year:
if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4) ) {
	
	//Check that they were born before 2016 
	if ($_POST['year'] < 2025) {
		$age = 2025 - $_POST['year']; 
	} else {
	print '<p class="error"> Are you from the future?! This year has not happened yet. Try again. </p>';
	$okay = false; //End of 2nd conditional 
}
} else { //Else for 1st conditional.
	print '<p class="error">Please enter the year you were born as four numerical digits. </p>';
	$okay = false;
} //End of 1st conditional. 

//Validate the terms: 
if ( !isset($_POST['terms'])) {
	print '<p cass="error"> You must accept the terms and conditions.</p>';
	$okay = false; 
}
//Validate the color:
if ($_POST['color'] == 'red') {
	$color_type = 'primary';
} elseif ($_POST['color'] == 'yellow') {
	$color_type = 'primary';
} elseif ($_POST['color'] == 'green') {
	$color_type = 'secondary';
} elseif ($_POST['color'] == 'fuschia') {
	$color_type = 'secondary';
} elseif ($_POST['color'] == 'purple') {
	$color_type = 'secondary';
} elseif ($_POST['color'] == 'turqouise') {
	$color_type = 'tertiary';
} elseif ($_POST['color'] == 'msgenta') {
	$color_type = 'primary';
} elseif ($_POST['color'] == 'blue') {
	$color_type = 'primary';
} else {//problem!
	print '<p class="error"> Please select your favorite color.</p>';
	$okay = falst;
}

//If there were no errors, print a success message:
if ($okay) {
	print '<p> You have been successfully registered!</p>'; 
	print "<p> You will turn $age this year. </p>";
	print "<p> Your favorite color is a $color_type color. </p>";
}
?>
</body>
</html>
