<?php //Script 8.9 regsister.php
//Set the page title and include the header file:
define('TITLE', 'Register');
include('templates/header.html');

//Print introductory text
print '<h2> Registration Form</h2>
	<p>Register for the site so you are able to take advantage of premium features!<p>';
	
//Check if form has been submitted
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$problem = false; //no problems so far

	if (empty($_POST['first_name'])) {
	$problem = true;
		print '<p> class="text--error">Please enter your first name!</p>';
	}
	if (empty($_POST['last_name'])) {
	$problem = true;
		print '<p class="text-error">Please enter your last name!</p>';
	}
	if (empty($_POST['email']) || (substr_count($_POST['email'],'@') != 1)) {
	$problem = true;
		print '<p class="text--error">Please enter your email address!</p>';
	}
	if (empty($_POST['password1'])) {
	$problem = true;
		print '<p class="text--error">Please enter a password!</p>';
	}
	if ($_POST['password1'] != $_POST['password2']) {
	$problem = true;
		print '<p class="text--error">Your password did not match. Try again!</p>';
	}
	if (!$problem) {//if no problems found
		print '<pclass="text-sucess">You are now registered!<br> In theory...</p>';
		
		//Send the email
		$body = "Thank you, {$_POST['first_name']}, for registering with the J.D. Salinger fan club!'."; 
		mail($_POST['email'], 'Registration Confirmation',
		$body, 'From:admin@example.com');
	
	//Clear posted values:
	$_POST=[];
	} else {//forgot a field
		print '<p class="text-error">Hmmmm something is missing</p>';
	}	
}//End of handle form IF

//create the form:
?>
<form action= "register.php" method="post" class="form--inline">

	<P><label for="first_name">First Name:</label><input type="text" name="first_name" size="20" value="<?php if (isset($_POST['first_name'])) { print htmlspecialchars($_POST['first_name']); } ?>"</p>
	<P><label for="last_name">Last Name:</label><input type="text" name="last_name" size="20" value="<?php if (isset($_POST['last_name'])) { print htmlspecialchars($_POST['last_name']); } ?>"</p>
	<P><label for="email">Email Address:</label><input type="text" name="email" size="20" value="<?php if (isset($_POST['email'])) { print htmlspecialchars($_POST['email']); } ?>"</p>
	<P><label for="password1">Password:</label><input type="text" name="password1" size="20" value="<?php if (isset($_POST['password1'])) { print htmlspecialchars($_POST['password1']); } ?>"</p>
	<P><label for="password2">Confirm Password:</label><input type="text" name="password2" size="20" value="<?php if (isset($_POST['password2'])) { print htmlspecialchars($_POST['password2']); } ?>"</p>
	
	<p><input type="submit" name="submit" value="Register!" class="button--pill"></p>
	
</form>
<?php include('templates/footer.html'); ?>
