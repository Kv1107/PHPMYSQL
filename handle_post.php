<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forum Posting</title>
</head>
<body>
<?php //Script 5.2 - handle_post.php
/* This script will recieve the values from positng.html: first_name, last_name, email, post, submit */

//Address error management, if wanted

//Get the values from the $_POST array:
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$posting = $_POST['posting'];

//Create a full name variable:
$name = $first_name. ' ' . $last_name; 

//Print the message:
print "<div> Thank you, $name, for your post: 
<p>$posting</p></div>";

?>
</body>
</html>
