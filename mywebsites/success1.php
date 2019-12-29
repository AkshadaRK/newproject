<body>
<?php include "dbconnect1.php"?>
<?php
session_start();
$upass ="";
$umobile = "000000";

/*$uname = $_REQUEST["name"];
$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$upass = $_REQUEST["pwd"];
$rpass = $_REQUEST["rpwd"];
$uadd = $_REQUEST["txtadd"];
$umobile = $_REQUEST["num"];
$udob = $_REQUEST["dob"];
$ugender = $_REQUEST["gen"];
$uemail = $_REQUEST["txteml"];
$uadhar = $_REQUEST["anum"];
$upeople = $_REQUEST["children"];
$udrive = $_REQUEST["rdrive"];
$uprofile = $_REQUEST["imgfile"];*/

if (isset($_COOKIE["cname"]))
	$uname = $_COOKIE["cname"];
else
	$uname = "Guest";

if (isset($_COOKIE["cfname"]))
	$fname = $_COOKIE["cfname"];
else
	$fname = "Guest";

if (isset($_COOKIE["clname"]))
	$lname = $_COOKIE["clname"];
else
	$lname = "Guest";

if (isset($_COOKIE["cpass"]))
	$upass = $_COOKIE["cpass"];

/*if (isset($_COOKIE["crpass"]))
	$urpass = $_COOKIE["crpass"];*/

if (isset($_COOKIE["cuadd"]))
	$uadd = $_COOKIE["cuadd"];



if (isset($_COOKIE["cuphone"]))
	$uphone = $_COOKIE["cuphone"];

if (isset($_COOKIE["cdob"]))
	$udob = $_COOKIE["cdob"];

if (isset($_COOKIE["cgender"]))
	$ugender = $_COOKIE["cgender"];

if (isset($_COOKIE["cemail"]))
	$uemail = $_COOKIE["cemail"];
else
	$uemail = "abc@abc.com";

if (isset($_COOKIE["cadhar"]))
	$uadhar = $_COOKIE["cadhar"];

if (isset($_COOKIE["cdrive"]))
	$udrive = $_COOKIE["cdrive"];

if (isset($_COOKIE["cpeople"]))
	$upeople= $_COOKIE["cpeople"];

/*if (isset($_COOKIE["simg"]))
	$usal = $_COOKIE["simg"];
*/

//echo "<br/> connection successfull  <br/>";

$sql = "Insert into travel1  (username,first_name,Last_name,Password,Address,mb_no,dob,gender,email,adhar_no,driving,No_of_people) values ('$uname','$fname','$lname','$upass','$uadd','$uphone','$udob','$ugender','$uemail','$uadhar','$udrive','$upeople')";

echo $sql . "<br/>";

if(!mysqli_query($con,$sql))
{
	echo "Error : " . $sql . "  " . mysqli_error($con);	
}
else
{
?>

<h3>
Dear <?php echo $uname ;?> you are successfully registered with our website , you will
soon get an email on your registered <?php echo $uemail;?> and password will be sent on given mobile 
<?php echo $uphone;
}
mysqli_close($con);
?>
</h3>
<?php 
/*session_destroy();
setcookie("cname","",time()-3600);
setcookie("cemail","",time()-3600);*/
?>
</body>