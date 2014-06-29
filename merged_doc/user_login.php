<?php

session_start();
$_SESSION['id']=$user;

$user=$_POST['user1'];
$pass=$_POST['pass1'];
$_SESSION['id']=$user;

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "btp";


 $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

$sql=mysql_query("Select password from student_info where emp_id='$user' and patient_id=1");
$result=mysql_fetch_array($sql);




if($pass==null || pass=="")
{

header("location: user_login.html?remarks=fail");
echo "invalid credentials" ;
}
elseif($result['password']==$pass)
{

 header("location: user_page.php?remarks=$user");

}
else
{
//echo "invalid credentials";
header("location: user_login.html?remarks=fail");

}

mysql_close($bd);
?>

