
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php include "dbconnect1.php"?>

<?php

session_start();

if(isset($_REQUEST["flag"]))
{
		echo "<script> alert('record updated successfully') </script>";
}
$uname = $_COOKIE["cname"];
$uemail = "";
$umobile = "";
$upass = "";
echo $uname;


$sql = "select username,Password,email,mb_no from travel1 where username = '$uname'";

//echo $sql;

$result  = mysqli_query($con,$sql);


if(mysqli_num_rows($result) >0 )
{
	while($row = mysqli_fetch_assoc($result))
	{
		$uemail = $row["email"];
		$upass = $row["userpass"];
		$umobile = $row["mobile"];
	}
}
else
{
	echo "Error in fetching data for " . $uname;
}



mysqli_close($con);
?>
<form action="update1.php">
<table 
bgcolor="lavender" width="40%"
align="center"
>
<tr>
<th colspan="2"> User Signup </th>
</tr>
<tr>
<td>
Username 
</td>
<td>
<output> <?php echo $uname ; ?> </output>
<!--value="Parag" autocomplete readonly-->
</td>
</tr>
<tr>
<td>
Password
</td>
<td>
<input type="password" id="txtpass" name="txtpass" 
 autofocus 
placeholder = "Enter Password"
value = "<?php echo $upass;?>"
/>
<div id="errp"></div>
</td>
</tr>
<tr>
<td>
Retype Password
</td>
<td>
<input type="password" id="txtrpass" name="txtrpass" 
 autofocus 
placeholder = "Re-Enter Password" 
/>
</td>
</tr>
<tr>
<td>
email
</td>
<td>
<input type="email" name="email" 
 autofocus 
placeholder = "Enter Email" required
value = "<?php echo $uemail;?>"
/>
</td>
</tr>
<tr>
<td>
Mobile
</td>
<td>
<input type="number" name="mobile" 
 autofocus 
placeholder = "Enter Mobile" 
value = "<?php echo $umobile;?>"
/>
</td>
</tr>
<tr>
<th colspan="2"> <input type="submit" class="btn btn-primary" value="Update"/> 
<a href="delete.php" class="btn btn-primary"> Delete </a>
</th>
</tr>
</table>
</form>
</body>
