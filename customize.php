<?php //Script 9.1 - customize.php

//Handle the form if it has been submitted
if (isset($_POST['font_size'], $_POST['font_color'])) {
	
	//Send cookies:
	setcookie('font_size', $_POST['font_size']);
	setcookie('font_color', $_POST['font_color']);
	
	//Message to be printed later:
	$msg = '<p> Your settings have been entered! Now see them <a href="view_settings.php">in action</a>.</p>';
} //End of submitted IF.
?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Customize Your settings</title>
</head>
<body>
<?php //If cookies were sent print a Message
if (isset($msg)) {
	print $msg;
}
?>

<p>Use this form to set your preferences:</p>

<form action="customize.php" method="post">
	<select name="font_size">
	<option value="">Font Size</option>
	<option value="xx-small">XX-Small</option>
	<option value="x-small">X-Small</option>
	<option value="small">Small</option>
	<option value="medium">Medium</option>
	<option value="large">Large</option>
	<option value="x-large">X-Large</option>
	<option value="xx-large">XX-Large</option>	
	</select>
	<select name="font_color">
	<option value="">Font Color</option>
	<option value="999">Gray</option>
	<option value="0c0">Green</option>
	<option value="00f">Blue</option>
	<option value="c00">Red</option>
	<option value="000">Black</option>
	</select>
	<input type="submit" name="submit" value="Set My Preferences">
</form>
</body>
</html>
