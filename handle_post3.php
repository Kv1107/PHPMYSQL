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
$posting = nl2br($_POST['posting'], false); 

//Create a full name variable:
$name = $first_name. ' ' . $last_name; 

//Adjust for HTML tage:
$html_post = htmlentities($_POST['posting']);
$strip_post = strip_tags($_POST['posting']);

//Print the message:
print "<div> Thank you, $name, for your post: 
<p>Original: $posting</p>
<p>Entity: $posting</p>
<p>Stripped: $strip_post</p></div>";

?>
</body>
</html>
