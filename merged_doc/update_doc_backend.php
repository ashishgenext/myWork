<?php
session_start();
$doc_id=$_SESSION['id'];


$email =$_POST['email'];
$degree=$_POST['degree'];
$landline =$_POST['landline'];
$mobile =$_POST['mobile'];
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

mysql_query("UPDATE doctor_record SET email='$email',degree='$degree',landline='$landline',mobile='$mobile',treatment='$treatment',education=,mon_avail='$mon_avail',mon_from='$mon_from',mon_to='$mon_to',tue_avail='$tue_avail',tue_from='$tue_from',tue_to='$tue_to',wed_avail='$wed_avail',wed_from='$wed_from',wed_to='$wed_to',thur_avail='$thur_avail',thur_from='$thur_from',thur_to='$thur_to',fri_avail='$fri_avail',fri_from='$fri_from',fri_to='$fri_to',sat_avail='$sat_avail',sat_from='$sat_from',sat_to='$sat_to'
             WHERE emp_id='$doc_id' 
		    ")
		
		//header("location: doctor_info.html?remarks=success");
}


mysql_close($bd);
 

?>

