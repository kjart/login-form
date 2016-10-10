<!Doctype HTML>
<html lang = "en">
<head>
	<title> High tech registration </title>
</head>
<body>

<?php
include "cont.php";

// this function trims and set the data that is to be validated
	function test_data($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	$Uname = $Fname = $Lname = $email = $pwd1 = $pwd2 = $gender =$errors= ""; // initializes the  variables for the form data
	if ($_SERVER['REQUEST_METHOD'] == "POST"){ // checks if the form has been submitted
	    
		$errors = array(); // creates an array to put the errors in the field
		// checks if the username is empty
		if(empty($_POST['Uname'])){
		   $errors[] = "Username is required";
		}// end if username
		//initializes the username
		else{
			$Uname = test_data($_POST['Uname']);	
		}
		//checks if the Firstname is empty
		if(empty($_POST['Fname'])){
		   $errors[] = "Firstname is required";
		}
		//initializes the firstname
		else{
			$Fname = test_data($_POST['Fname']);	
		// checks if the first name matches the specified pattern
		if(!preg_match("/[a-zA-Z]+/" , $Fname)){
			$errors[] = "Only letters are allowed";
			}// end if of firstname
		}// end else of firstname
		//checks if the last name is empty
		if(empty($_POST['Lname'])){
		   $errors[] = "Lastname is required";
		}// end if of lastname
		//initializes the last name
		else{
			$Lname = test_data($_POST['Lname']);
		}// end else of lastname
		// checks if the email is empty
		if(empty($_POST['email'])){
		   $errors[] = "email is required";
		}// end of if of email
		// initializes the email
		else{
			$email = test_data($_POST['email']);
		// checks if the email conforms to the specified pattern
		if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/" , $email)){
			$errors[] = "email format not valid!";
			}// end if of email
		} // end else
		// checks if the first password is empty
		if(empty($_POST['pwrd1'])){
			$errors[] = "the password is required";
		} // end if of password
		else{
			$pwd1 = test_data($_POST['pwrd1']);
			$pwd2 = test_data($_POST['pwrd2']);
		
		// checks if the two passwords entered matches
		if($pwd1 != $pwd2){
			$errors[] = "the password doesn't match";
		}// end if of validation
		}// end else of password
		if(empty($_POST['sex'])){
			$errors[] = "you need to choose a gender";
		} // end if of gender
		else{
			$gender = test_data($_POST['sex']);
		} // end gender else
	}// end the request method if 

?>
<?php

if ($_SERVER['REQUEST_METHOD'] == "POST"){ // check if the form has been submitted

// escape variables for security
$Uname = mysqli_real_escape_string($con,$_POST['Uname']);
$Fname = mysqli_real_escape_string($con,$_POST['Fname']);
$Lname = mysqli_real_escape_string($con,$_POST['Lname']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$pwd1 = mysqli_real_escape_string($con,$_POST['pwrd1']);
$gender = mysqli_real_escape_string($con,$_POST['sex']);
	if(empty($errors)){ // check if the array for errors is empty
	$sql = "INSERT INTO user 
				VALUES ('$Uname' ,'$Fname','$Lname' , '$email' ,'$pwd1' , '$gender')";
	if($con->query($sql) === TRUE){
		echo"record added Succesfully!";
		header("location:login.php");
	}// end 
	else{
		echo "there is an error";
	}
} // end check errors
else{
	echo "Oops! Some  Error Occured: <br>";
	for($x = 0 ;$x < count($errors); $x++){ // prints out the error messages 
		echo "<li>" . $errors[$x] . "</li> ";
		
	} // end the for loop
	echo "<a href = 'form.php'> Click here </a> to go back to Registration Page";
 
}
}// end of the form validate if

?>



	
</body>
</html>