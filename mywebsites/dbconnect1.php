<?php 

$servername = "localhost";
$username = "root";
$userpass = "";
$dbname = "DB27";

$con = mysqli_connect($servername,$username,$userpass,$dbname);

if(!$con)
{
		die("Connection Failed ".mysqli_connect_error());
}
?>