<?php
include "dbconnect1.php";
session_start();
$error='';
if(isset($_POST["login"])){
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];

$_SESSION['name']=$uname;

$query="select * from login where username='$uname' and password='$pwd'";
$result  = mysqli_query($con,$query);
if(mysqli_num_rows($result) >0 )
{
	while($row = mysqli_fetch_assoc($result))
	{

	header('location:homepage.php');
	}}
else
{
	$error="Invalid username and password";
}

//$query="insert into login(username,password)values('$uname','$pwd')";

//if(mysqli_query($con,$query)){
	//echo "record inserted successfully";
	//header('location:homepage.php');
//}
//else
//{
	//echo "not inserted";
//}



}

?>

<body>
<form method="post">

Username:<input type="text" name="uname"><br>
Password:<input type="password" name="pwd"><br>
<input type="submit" name="login" value="login">
<?php  echo $error; ?>
</form>
</body>