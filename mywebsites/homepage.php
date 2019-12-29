<?php
session_start();

if(isset($_SESSION['name'])){


?>


<h1>Welcome  <?= $_SESSION['name'];  ?></h1>

<a href="logout.php">Logout</a>

<?php
}
else
{
header('location:login.php');

}

?>	