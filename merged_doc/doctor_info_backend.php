<?php
session_start();

//This is the directory where images will be saved
$target = "F:\wamp\www\profile images\ ";
$target = $target . basename( $_FILES['photo']['name']);



$name = $_POST['name'];
$emp_id =$_POST['emp_id'];
$password =$_POST['password'];
//$sex =$_POST['sex'];
$pic=($_FILES['photo']['name']);
$email =$_POST['email'];
$degree=$_POST['degree'];
$landline =$_POST['landline'];
$mobile =$_POST['mobile'];
//echo $mobile;
$registration =$_POST['registration'];
$speciality =$_POST['speciality'];
$treatment =$_POST['treatment'];
$education =$_POST['education'];

$mon_avail=$_POST['mon_avail'];
//echo $mon_avail;
$mon_from=$_POST['mon_from'];
$mon_to=$_POST['mon_to'];

$tue_avail=$_POST['tue_avail'];
$tue_from=$_POST['tue_from'];
$tue_to=$_POST['tue_to'];

$wed_avail=$_POST['wed_avail'];
$wed_from=$_POST['wed_from'];
$wed_to=$_POST['wed_to'];

$thur_avail=$_POST['thur_avail'];
$thur_from=$_POST['thur_from'];
$thur_to=$_POST['thur_to'];

$fri_avail=$_POST['fri_avail'];
$fri_from=$_POST['fri_from'];
$fri_to=$_POST['fri_to'];

$sat_avail=$_POST['sat_avail'];
$sat_from=$_POST['sat_from'];
$sat_to=$_POST['sat_to'];

$sun_avail=$_POST['sun_avail'];
$sun_from=$_POST['sun_from'];
$sun_to=$_POST['sun_to'];

require("connect.php");

$avail=mysql_query("SELECT emp_id FROM doctor_record where emp_id='$emp_id'");
$values=mysql_fetch_array($avail);

echo $values['emp_id'];
if($values['emp_id']==$emp_id)
{
echo "you are already registered" ;
}
else {
mysql_query("INSERT INTO doctor_record(name,emp_id,password,photo,email,degree,landline,mobile,registration,speciality,treatment,education,mon_avail,mon_from,mon_to,tue_avail,tue_from,tue_to,wed_avail,wed_from,wed_to,thur_avail,thur_from,thur_to,fri_avail,fri_from,fri_to,sat_avail,sat_from,sat_to) VALUES 
		( '$name','$emp_id','$password','$pic','$email','$degree','$landline','$mobile','$registration','$speciality','$treatment','$education','$mon_avail','$mon_from','$mon_to','$tue_avail','$tue_from','$tue_to','$wed_avail','$wed_from','$wed_to','$thur_avail','$thur_from','$thur_to','$fri_avail','$fri_from','$fri_to','$sat_avail','$sat_from','$sat_to' )");

		
		//header("location: doctor_info.html?remarks=success");
}

//Writes the photo to the server
if(move_uploaded_file($_FILES['photo']['tmp_name'], $target. basename($_FILES['photo']['name'] )))
{

//Tells you if its all ok
echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory";
}
else {

//Gives and error if its not
echo "Sorry, there was a problem uploading your file.";
}
mysql_close($bd);
 

?>
