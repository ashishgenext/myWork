<?php

include 'phpConnect.php';
include 'fileUpload.php';
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
};

$name =$_POST['name'];
$designation = $_POST['designation'];
$email = $_POST['email_id'];
$employee_no = $_POST['employee_no'];
$school_office = $_POST['school_office'];
$name_patient = $_POST['name_patient'];
$age = $_POST['age'];
$relation = $_POST['relation'];
$number_of_vouchers = $_POST['number_of_vouchers'];
$reimbursmentRequestId = generateRandomString()."_".$employee_no;
$dirName = "upload/".date("d.m.y")."/".$_POST['employee_no'];
$query = "INSERT INTO reimbursment (name,designation,employee_id,school_or_office,patient_name,patient_age,relation, request_id, email_id, path) VALUES ( '$name', '$designation', '$employee_no', '$school_office','$name_patient','$age', '$relation', '$reimbursmentRequestId', '$email', '$dirName')";


echo $sqlone;
If (mysql_query($query))
{
     header("location: ../detailsHTML.php?request_id=".$reimbursmentRequestId);
}
else 
{
	mysql_query($query) or die(mysql_error());
	//header("location: ../reimbursment.html?remarks=error");
}
?>