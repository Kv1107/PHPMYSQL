<!doctype html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<title> Manipulate Strings</title>
</head>
<body>

<?php

//declare variables 

$title = "Preamble: We the"; 
$preamble = "We the People of the United States, in Order to form a more perfect Union, establish Justice, insure domestic Tranquility, provide for the common defence, promote the general Welfare, and secure the Blessings of Liberty to ourselves and our Posterity, do ordain and establish this Constitution for the United States of America.";
$words = str_word_count($preamble);
//manipulate Strings

echo strtok ($title, ' ' ) ; //prints only the first word ("Preamble:")
echo substr($preamble, 0, 73) ; //prints the first 70 characters of the preamble
echo $words
?>
</body>
</html>
