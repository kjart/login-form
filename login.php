<!Doctype html>
<!-- the session and included files here -->
<?php
include "sql_login.php";
?>
<html lang = 'en'>
<head>
<title> login page </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type = "text/css" href = "/login/w3.css">
<link rel = "stylesheet" type = "text/css" href = "login/style.css">
<script src = "jquery/jquery-3.1.1.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
$(document).ready(function(){
	$("button").click(function(){
		$("p") . hide();
	});
});
</script>
</head>
<body>
<!-- the form for the login starts here -->
<div class = "w3-container w3-pink">
<h1 id = "head"> Welcome to Our Login Page!</h1>
<?php
if($error_msg){
	echo $error_msg;
}
?>
<form name = "Login" action = "sql_login.php" method = "POST">
<label for = "username"> Username: </label>
<input type = "text" name = "name" required placeholder = "Username or Email"><br>
<label for = 'password'>Password:</label>
<input type = "password" name = "pwrd" required placeholder = "*********"><br>
<p>New to Golden Berry?<a href = "form.php"> sign up </a></p><br>
<a href = "rec.php"> forgot your password? </a><br>
<input type = "submit" value = "Sign In" name = "submit">
</form>
<button> hide me </button>
<p id = "set"> hide this text </p>
</div>




</body>
</html>