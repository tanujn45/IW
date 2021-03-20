<?php 
$host = "localhost";
$username = "root";
$password = "";

$dbname = "iw";

$conn = mysqli_connect($host, $username, $password,$dbname);
if(!$conn) {
	echo "couldn't connect";
}
?>