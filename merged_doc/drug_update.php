<?php
session_start();
$prodName =$_POST['prodName'];
$prodCode = $_POST['prodCode'];
$batchId = $_POST['batchId'];
$quantity = $_POST['quantity'];
$shelf = $_POST['shelf'];
$drug_group = $_POST['drug_group'];
$manufacture = $_POST['manufacture'];
$genericName = $_POST['genericName'];
$contents = $_POST['contents'];
$medicineFor = $_POST['medicineFor'];
$precautions = $_POST['precautions'];
$expDate = $_POST['expDate'];
//echo $expDate;
//$date1=strtotime($expDate);
echo date("d/m/Y",'$expDate');
//echo $date1;
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "btp";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
$query="SELECT * FROM `prod_info` WHERE `prodCode`='$prodCode' AND`batchId`='$batchId'";
$avail=mysql_query($query,$bd);

$values=mysql_fetch_array($avail);

if($values[0])
{
//echo"yoyo";
mysql_query("UPDATE `prod_info` SET `currentStock`=(`currentStock`+'$quantity') WHERE `prodCode`='$prodCode' AND `batchId`='$batchId'");

}
else
{
//echo"yoyo";
mysql_query("INSERT INTO `btp`.`prod_info` (`prodName`, `prodCode`, `batchId`, `currentStock`, `shelf`, `drug_group`, `manufacture`, `genericName`,`contents`, `medicineFor`, `precautions`, `expDate`) VALUES ('$prodName','$prodCode','$batchId','$quantity','$shelf','$drug_group','$manufacture','$genericName','$contents','$medicineFor','$precautions','$expDate')");
}

//header("location: drug_update.html?remarks=success");
mysql_close($bd);

?>
