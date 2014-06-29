<?php
session_start();

$choose=$_POST['choose'];
$username=$_POST['username'];
$password=$_POST['password'];





$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "btp";
 

 $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
//echo $choose;
if($choose=="Doctor")
	{
	$avail=mysql_query("SELECT password FROM doctor_record where emp_id='$username'");
	$values=mysql_fetch_array($avail);
	
	if($values[0] && $values['password']==$password)
		{
		$_SESSION['id']=$username;
		header("location: new_doctor_page.php?remarks=success");
		
		}
		else header("location: invalid_credentials.html?remarks=fail");
	}
	
if($choose=="Drug Store")
	{
	
	$avail=mysql_query("SELECT password FROM drug_manager where emp_id='$username'");
	$values=mysql_fetch_array($avail);
	
	if($values[0] && $values['password']==$password)
		{
		$_SESSION['id']=$username;
		header("location: drug_store.php?remarks=success");
		
		}
		else header("location: invalid_credentials.html?remarks=fail");
	}	
if($choose=="Nurse")
	{
	
	$avail=mysql_query("SELECT password FROM nurse where emp_id='$username'");
	$values=mysql_fetch_array($avail);
	
	if( $values['password']==$password)
		{
		$_SESSION['id']=$username;
		header("location: nurse_page.php?remarks=success");
		
		}
		else header("location: invalid_credentials.html?remarks=fail");
	
	}

	if($choose=="Receptionist")
	{
	$avail=mysql_query("SELECT password FROM receptionist where emp_id='$username'");
	$values=mysql_fetch_array($avail);
	
	if($values[0] && $values['password']==$password)
		{
		$_SESSION['id']=$username;
		header("location: receptionist_page.php?remarks=success");
		
		}
		else header("location: invalid_credentials.html?remarks=fail");
	}




mysql_close($bd);
 

?>