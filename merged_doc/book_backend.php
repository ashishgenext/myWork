<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css" media="all">
</head>
<?php
session_start();
$app_date=$_POST['app_date'];
$app_slot=$_POST['app_slot'];
$doctor_id=$_POST['doctor_id'];
$doctor_name=$_POST['doctor_name'];
$patient_name=$_POST['patient_name'];
$patient_id=$_POST['patient_id'];
$problems=$_POST['problems'];
require("connect.php");
//echo"yoyoyoyo";
mysql_query("INSERT INTO new_appointment (app_slot,app_date,patient_id,patient_name,problems,doctor_name,doctor_id) VALUES ('$app_slot','$app_date','$patient_id','$patient_name','$problems','$doctor_name','$doctor_id')");


$values=mysql_query("SELECT email FROM unique_user WHERE emp_id='$patient_id' ");
$avail=mysql_fetch_array($values);
$mail_id=$avail['email'];
$subject="appointment conformation";
$body="You have registered appointment on".$app_date;
mysql_query("INSERT INTO email_db.emailqueue (email_address,body,subject,status,appointment_date) VALUES ('$mail_id','$body','$subject','unsent','$app_date')");



mysql_query("INSERT INTO email_db.emailqueue (app_slot,app_date,patient_id,patient_name,problems,doctor_name,doctor_id) VALUES ('$app_slot','$app_date','$patient_id','$patient_name','$problems','$doctor_name','$doctor_id')");
exec("java -jar dist/test.jar ", $output);

mysql_close($bd);
echo"<div class='well' style='text-align: center;'>";
echo "<h3>Your Appointment had been booked and a remainder has been set</h3>
 <form action='user_page.php' target='_top'>
 <div>
							<input name='submit' type='submit' class='btn btn-success' id='submit' value='Home' />
						</div>     
 </form>
</div> "

?>

</html>