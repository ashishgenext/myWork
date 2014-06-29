<?php
session_start();

$fname = $_POST['fname'];
$lname =$_POST['lname'];

$emp_id =$_POST['emp_id'];
$pass1 =$_POST['pass1'];

$sex =$_POST['sex'];
$dob=$_POST['dob'];
$designation =$_POST['designation'];


$email =$_POST['email'];
$contact =$_POST['contact'];

$address =$_POST['address'];
//$patient_id=1;





$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "btp";
 

 $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");


$avail=mysql_query("SELECT emp_id FROM employee_info where emp_id='$emp_id'");
$values=mysql_fetch_array($avail);


if($values['emp_id']==$emp_id)
{
echo "you are already registered" ;
}
else {
mysql_query("INSERT INTO employee_info (fname,lname,emp_id,password,sex,dob,designation,email,contact,address ) VALUES 
		( '$fname','$lname','$emp_id','$pass1','$sex','$dob','$designation','$email','$contact','$address')");





header("location: user_login_emp.html?remarks=success");
}
mysql_close($bd);
 

?>