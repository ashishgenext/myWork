<?php
include 'phpConnect.php';
$request_id =$_POST['request_id'];
$name =$_POST['supplier_name'];
$tests = $_POST['tests'];
$medicines = $_POST['medicines'];
$testsCost = $_POST['testsCost'];
$medicinesCost = $_POST['medicinesCost'];
if($medicines == 'other')
{
	
	$medicines = $_POST['medicinesOther'];
}

$sqlone = "INSERT INTO medicine_details(request_id, name_of_supplier,tests,medicines, medicines_cost, tests_cost) VALUES ('$request_id','$name', '$tests', '$medicines','$medicinesCost', '$testsCost')";
If (mysql_query($sqlone))
{
    header("location: ../detailsHTML.php?request_id=".$request_id );
}
else 
{ 
	echo $sqlone;
}
mysql_close();

?>