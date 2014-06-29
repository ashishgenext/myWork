<?php
session_start();
include 'phpConnect.php';

$user_name =$_POST['user_name'];
$password = $_POST['password'];


$query = "select * from admin where user_name='$user_name' and password=md5('$password')";

$result = mysql_query($query) or die(mysql_error());

If ( $info = mysql_fetch_array( $result ) )
{
	//session_register("user_name");
	$_SESSION['user']=$user_name;
	header("location: ../admin.php");
}
else 
{
	
	header("location: ../admin_login.php?remarks=error");
}
?>