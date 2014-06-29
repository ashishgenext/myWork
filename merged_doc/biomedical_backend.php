<?php
session_start();
$waste_date=$_POST['waste_date'];
$cat1=$_POST['cat1'];
$cat6=$_POST['cat6'];
$cat4=$_POST['cat4'];
$cat7=$_POST['cat7'];
$cat8=$_POST['cat8'];
$cat10=$_POST['cat10'];
require("connect.php");
mysql_query("INSERT INTO waste_record (waste_date,cat1,cat6,cat4,cat7,cat8,cat10) VALUES ('$waste_date','$cat1','$cat6','$cat4','$cat7','$cat8','$cat10')");
mysql_close($bd);
header('Location"biomedical.php?q=success');
?>