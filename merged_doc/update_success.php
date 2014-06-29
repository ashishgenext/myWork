<?php
session_start();

$fname = $_POST['fname'];
$lname =$_POST['lname'];
$emp_id =$_POST['emp_id'];
$guardian=$_POST['guardian'];
$password =$_POST['password'];
$dob=$_POST['dob'];
$branch =$_POST['branch'];
$batch=$_POST['batch'];
$health_card =$_POST['health_card'];
$email =$_POST['email'];
$contact =$_POST['contact'];
$emergency =$_POST['emergency'];
$address =$_POST['address'];





$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "btp";


 $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

//$avail=mysql_query("UPDATE student_info SET fname='$fname',lname='$lname',guardian='$guardian',password='$password',dob='$dob',batch='$batch',branch='$branch',contact='$contact',emergency='$emergency,address='$address' WHERE emp_id='$emp_id' ");
$avail=mysql_query("UPDATE student_info SET fname='$fname',lname='$lname',guardian='$guardian',password='$password',dob='$dob',branch='$branch',batch='$batch',health_card='$health_card',email='$email',contact='$contact',emergency='$emergency',address='$address' WHERE emp_id='$emp_id'");
echo "Update Success";
$_SESSION['id']=$emp_id;
header("location: user_page.php?remarks=success");
/*
if($values['emp_id']==$enroll)
{
echo "you are already registered" ;
}
else {
mysql_query("INSERT INTO student_info (fname,lname,emp_id,guardian,sex,dob,batch,designation,branch,password,health_card,blood_grp,email,hostel,contact,emergency,address,patient_id ) VALUES
		( '$fname', '$lname','$enroll','$guardian','$sex','$dob', '$batch','$desig_n','$branch','$pass1','$health','$blood','$email','$hostel','$contact','$emergency','$address','1')");
		header("location: student_register.html?remarks=success");
	}


*/

mysql_close($bd);


?>