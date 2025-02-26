<<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> No Soup for You! </title>
</head>
<body>
<h1> Mmmmmm....soups</h1>
<?php // Script 7.1 - soups3.php

//Create the array:
$soups = [
'Monday' => 'Tomato Basil Bisque',
'Tuesday' => 'Paris Bean Bistro',
'Wednesday' => 'Wild Rice Mushroom',
'Thursday' => 'Autumn Squash Apple Bisque',
'Friday' => 'Clam Chowder',
'Saturday' => 'Tortilla',
'Sunday' => 'Vegan Chili' 
];

//Print each key and value:
foreach ($soups as $day => $soup) {
	print "<p>$day: $soup</p>\n";
}
?>
</body>
</html>
