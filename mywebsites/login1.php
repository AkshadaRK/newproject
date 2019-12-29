<?php include "dbconnect.php"?>

<?php 
session_start();
$uname = $_REQUEST["txtname"];
$upass = $_REQUEST["pwd"];
$sql = "select count(*) as cnt from travel1 where 
username = '$uname' and userpass = '$upass'";


$flag = 0;

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($result))
{
		$flag = $row["cnt"];
		$_COOKIE["cname"] = $uname;
}

?>
<div style="width:100%;text-align:right">
	<a href="myaccount1.php"> My Account </a> &nbsp;&nbsp;&nbsp;
	<a href="logout1.php"> Logout </a>
</div>



<?php
if($flag)
{
		echo "Welcome " . $uname;

}
else
{
	
	header('Location: http://localhost/mywebsite/homepage.php?flag='.$flag);
}


?>





