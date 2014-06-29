<?php
session_start();

$fname = $_POST['fname'];
$lname =$_POST['lname'];
$enroll =$_POST['enroll'];
$guardian=$_POST['guardian'];
$pass1 =$_POST['pass1'];
$pass2 =$_POST['pass2'];
$sex =$_POST['sex'];
$dob=$_POST['dob'];
$branch =$_POST['branch'];
$health =$_POST['health'];
$blood =$_POST['blood'];
$email =$_POST['email'];
$hostel =$_POST['hostel'];
$contact =$_POST['contact'];
$batch=$_POST['batch'];
$emergency =$_POST['emergency'];
$address =$_POST['address'];
$desig_n="Student";




$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "btp";
 

 $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

$avail=mysql_query("SELECT emp_id FROM student_info where emp_id='$enroll'");
$values=mysql_fetch_array($avail);


if($values['emp_id']==$enroll)
{
echo "you are already registered" ;
}
else {
mysql_query("INSERT INTO student_info (fname,lname,emp_id,guardian,sex,dob,batch,designation,branch,password,health_card,blood_grp,email,hostel,contact,emergency,address,patient_id ) VALUES 
		( '$fname', '$lname','$enroll','$guardian','$sex','$dob', '$batch','$desig_n','$branch','$pass1','$health','$blood','$email','$hostel','$contact','$emergency','$address','1')");
		header("location: student_register.html?remarks=success");
	}




mysql_close($bd);
 

?>