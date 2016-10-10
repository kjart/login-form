<?php
// create a connection
$servername = "localhost";
$username = "kjart";
$password = "karsyusuf";
$dbase = "Regr";
$con = new mysqli($servername,$username,$password,$dbase);

// check connection
/*if ($con->connect_error){
	echo " Failed to connect to MySQL: " . $con->connect_error();
}
else{
	echo "Connection succesful!" . "<br>";
}*/

?>