<?php
$servername = "localhost";
$username= "root";//custom
$password = "";//custom password
$dbname = "web";
// create conecttion
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if($conn->connect_error) {
	die("connect failed".$conn->connect_error);
}
// echo "connect successfully";
?>