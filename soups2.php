<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> No Soup for You! </title>
</head>
<body>
<h1> Mmmmmm....soups</h1>
<?php // Script 7.1 - soups1.php

//Create the array:
$soups = [
'Monday' => 'Tomato Basil Bisque',
'Tuesday' => 'Paris Bean Bistro',
'Wednesday' => 'Wild Rice Mushroom',
'Thursday' => 'Autumn Squash Apple Bisque',
];


//Count and print the current number of elements:
$count1 = count($soups);
print "<p> The soups array originally had $count1 elements.</p>";

//Add three items to the array:
$soups['Friday'] = 'Clam Chowder';
$soups['Saturday'] = 'Tortilla';
$soups['Sunday'] = 'Vegan Chili';

//Count and print the number of elements again:
$count2 = count($soups);
print "<p> After adding 3 more soups, the array now has $count2 elements. </p>";

//Print the contents of the array:
print_r($soups);

?>
</body>
</html>
