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
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$posting = trim($_POST['posting']);

//Create a full name variable:
$name = $first_name. ' ' . $last_name; 

//Get a word count:
$words = str_word_count($posting);

//Take out the bad words:
$posting = str_ireplace('badword', 'XXXXX', $posting);


//Print the message:
print "<div> Thank you, $name, for your post: 
<p>$posting...</p>
<p> ($words words) </p></div>";

//Make a link to another page:
$name = urlencode($name);
$email = urlcode($_POST['email']);
print "<p> Click <a href=\"thanks.php?name=$name&email=$email\">here</a> to continue.</p>";

?>
</body>
</html>
