
<html>
<body style="color:red">
<?php

session_start();
$uname = $_REQUEST["txtname"];
$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$upass = $_REQUEST["pwd"];
//$urpass = $_REQUEST["pwd"];
$uadd= $_REQUEST["txtadd"];
$uphone = $_REQUEST["num"];
$udob = $_REQUEST["dob"];

$uemail = $_REQUEST["txteml"];
$uadhar = $_REQUEST["anum"];
$upeople = $_REQUEST["children"];
//$epeople = $_REQUEST["adults"];
//$epeople = $_REQUEST["adults"];
/*$usal = $_REQUEST["name"];

if($usal == "Mr")
	$usal = "Mr.";
elseif($usal == "Mrs")
	$usal = "Mrs.";
else
	$usal = "Ms.";	*/

$ugender = $_REQUEST["gen"];
if($ugender == "m")
	$gender = "Male";
elseif($ugender == "f")
	$gender = "Female";
elseif($ugender == "t")
	$gender = "Transgender";	
else
	$gender="No Gender Selected";

$udrive = $_REQUEST["rdrive"];
if($udrive == "Yes")
	$udrive = "Yes Driving";
else
	$udrive = "No Driving";

//$udob = $_REQUEST["dob"];

//$uprofile =  $_REQUEST["imgfile"];

setcookie("cname","$uname",time()+3600);
setcookie("cfname","$fname",time()+3600);
setcookie("clname","$lname",time()+3600);
setcookie("cpass","$upass",time()+3600);
//setcookie("crpass","$urpass",time()+3600);
setcookie("cuadd","$uadd",time()+3600);

setcookie("cuphone","$uphone",time()+3600);
setcookie("cdob","$udob",time()+3600);
setcookie("cgender","$ugender",time()+3600);
setcookie("cemail","$uemail",time()+3600);
setcookie("cadhar","$uadhar",time()+3600);
setcookie("cdrive","$udrive",time()+3600);
setcookie("cpeople","$upeople",time()+3600);
//setcookie("cepeople","$epeople",time()+3600);
//setcookie("cimg","$usal",time()+3600);

/*$_Session["spass"]=$upass;
$_Session["smobile"]=$umobile;*/
?>



<form action="success1.php">
<table align="center" border="1" width="30%" bgcolor="pink">
<tr>
<th colspan="2"> Registration Form </th>
</tr>

<tr> 
<td> Username </td>
<td> <?php echo $uname ; ?> </td>
</tr>
<tr> 
<td> Firstname </td>
<td> <?php echo $fname ; ?> </td>
</tr>
<tr> 
<td> Lastname </td>
<td> <?php echo $lname ; ?> </td>
</tr>
<tr> 
<td> Password </td>
<td> <?php echo $upass ; ?> </td>
</tr>
<!--
<td> Re-type Password </td>
<td> <?php echo $urpass ; ?> </td>
</tr>-->
<tr> 
<td> address </td>
<td> <?php echo $uadd ; ?> </td>
</tr>
<tr> 
<td> mobile </td>
<td nowrap> <?php echo $uphone ; ?> </td>
</tr>

<tr> 
<td> dob </td>
<td nowrap> <?php echo $udob ; ?> </td>
</tr>

<tr> 
<td> gender </td>
<td> <?php echo $gender ; ?> </td>
</tr>

<tr> 
<td> email </td>
<td> <?php echo $uemail ; ?> </td>
</tr>
<tr> 
<td> aadhar number </td>
<td> <?php echo $uadhar ; ?> </td>
</tr>

<tr>
<td> driving </td>
<td> <?php echo $udrive ; ?> </td>
</tr>

<tr>
<td> number of children </td>
<td> <?php echo $upeople ; ?> </td>
</tr>
<!--
<tr> 
<td nowrap> Profile Picture </td>
<td nowrap> <img src="images/<?php echo $uprofile ; ?>" height="100" width="100"></td>
</tr>-->
<tr>
<td align="right" nowrap> 
<button type="button" onclick="window.history.back()"> Back to Signup </button></td>
<td>
<button type="submit"> Confirm </button>
</td>
</tr>
</table>
</form>
</body>
</html>