<!DOCTYPE html>
<html>
<head>
<title> validate </title>
<!-- the scripting files here -->
<script src = "jquery/jquery-3.1.1.js"></script>
<!-- the js files here -->
<script src = "val.js"></script>

<meta charset = "UTF-8"> 

<style>
input:invalid {
  border: 1px solid red;
}

input:valid {
  border: 1px solid green;
}
</style>

</head>
<body>
<!-- the form field for username,firstname,lastname,password and gender -->
<form name = "form" method = "POST" action = "reg.php">
<label for = "username"> USERNAME: </label><br>
<input type = "text" name = "Uname" id = "Uname" required placeholder = "username"><br>
<label for = "firstname"> FIRSTNAME: </label><br>
<input type = "text" name = "Fname" id = "name" required placeholder = "firstname" pattern ="[a-zA-Z]+"><br>
<label for = "lastname"> LASTNAME: </label><br>
<input type = "text" name = "Lname" id = "Lname" required placeholder = "lastname"><br>
<label for = "email"> Enter your Email</label><br>
<input type = "email" id = "mail" name = "email" required placeholder = "Timpuppy@email.com"><br>
<label for = "password"> Password:</label><br>
<input type ="password" id = "password1" required placeholder = "***********" name = "pwrd1" value = ""><br>
 <label for = "password">Confirm Password</label> <br>
 <input type ="password" id = "password2" required name = "pwrd2" value = ""><br>
 <label for = "gender"> GENDER: </label>
 <input type = "radio" name = "sex" required value = "male"><label for = "male"> MALE </label>
 <input type = "radio" name = "sex" required value = "female"><label for = "male"> FEMALE </label><br>
<input type = "Submit" name = "submit" value = "SIGN UP">
</form>
<p> click to hide me </p>
<p id = "pa"> am to be hidden</p>

</body>
</html>
