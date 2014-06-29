<?php
session_start();

$fname = $_POST['fname'];
$lname =$_POST['lname'];
$emp_id =$_POST['emp_id'];
$pass1 =$_POST['pass1'];
$pass2 =$_POST['pass2'];
$sex =$_POST['sex'];
$desig_n =$_POST['desig_n'];
$special_i =$_POST['special_i'];
$exp =$_POST['exp'];
$email =$_POST['email'];
$contact =$_POST['contact'];
$about=$_POST['about'];



$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "btp";
 

 $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

$avail=mysql_query("SELECT emp_id FROM doctor_info where emp_id='$emp_id'");
$values=mysql_fetch_array($avail);

echo $values['emp_id'];
if($values['emp_id']==$emp_id)
{
echo "you are already registered" ;
}
else {
mysql_query("INSERT INTO doctor_info(fname,lname,emp_id,password,sex,designation,specialisation,experience,email,contact,about) VALUES 
		( '$fname','$lname','$emp_id','$pass1','$sex','$desig_n','$special_i','$exp','$email','$contact','$about' )");
header("location: doctor_register.html?remarks=success");
}
mysql_close($bd);
 

?>