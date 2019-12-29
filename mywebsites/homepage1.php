<html>
<head> <title> Khana Katta </title> 
<script src="jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(){
//$("h2").click(function(){
/*$("input").toggle();
$("button").toggle();
$("label").toggle();
*/
//slideDown(slow)
//slideUp(5000)
//$(".login").slideToggle("fast");
//$(".login").fadeOut(3000);
//fadeIn	
//$(".login").fadeToggle(3000);

})
})
</script>

<style>
.top{
	background-color:pink;
	width:100%;
	height:100%;
	text-align:center;
}

.parent{
position:absolute;
bottom:150px;
right:50px;
width:30%;
height:25%;
background-color:gray;
border:3px solid red;
text-align:center;
color:aqua;
}
.child
{
	border-bottom : 1px solid blue;
	
}

.login
{
	margin:5px;
	padding:5px;
	border:1px solid white;
}
</style>
</head>
<body>
<?php
$errmessage ="";
if(isset($_REQUEST["flag"]))
{
	$errmessage =  "Username or Password incorrect";
}
else
{
	$errmessage ="";
}
	
?>
<div class="top">
<div class="parent">
<div class="child">
<h2> User Login </h2>
</div>
<form action="login.php">
<div class="login">
<label> Username: </label><input type="text" name="username"/>
<label> Password: </label> <input type="password" name="userpassword"/>
<button type="submit"> login </button> 
<div> <?php echo $errmessage ?> </div>

</div>

</form>
</div>
</div>
</body>
</html>
