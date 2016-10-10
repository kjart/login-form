<?php
include "cont.php";
session_start();
// checks if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == "POST"){
$name = mysqli_real_escape_string($con,$_POST['name']);
$password = mysqli_real_escape_string($con,$_POST['pwrd']);
$agent = $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];
	// collect the values of the column 
	//email,password and Uname into a variable
$select = "SELECT Uname FROM `user` WHERE (email = '$name' OR Uname = '$name') AND password = '$password'" ; // selecting the values
	// store the query inside a variable named result
$result = $con->query($select);
	// store the values in an array called row
$row = $result->fetch_assoc();
$regname = $row['Uname'];
	// store the number of rows in the result set
$count = $result->num_rows;
// if result match $name and $password , table row must be 1
 if($count == 1){
    $_SESSION['login_user'] = $regname;
    $sql =  "INSERT INTO lgin(ip , agent) VALUES( '$ip' , '$agent')"; 
	$con->query($sql);
         header("location: home.php");
	 
 } // end of the if class
 else{
	$error_msg = "username or password is Invalid!";
	
	 
 }// check if count is not equal to 1
} // end the form submitted field
	


?>