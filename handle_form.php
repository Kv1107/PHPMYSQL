<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Your Feedback </title>
</head>
<body>
</php //Script 3.3 - handle_form.php 

//This recieves the data from feedback.html

//create shorthand versions of the variables:

$title = $_POST['title'];
$firstname = $_POST['firstname'];
$lastname = $_POST ['lastname'];
$response = $_POST['response'];
$comments = $_POST[comments'];

print "<p> Thank you, $title $firstname $lastname, for your comments. </p>
<p> You stated that you found this example to be '$resonse' and added: <br> $comments</p>;

/>
</body>
</html>
