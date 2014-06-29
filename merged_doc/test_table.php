<head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Sun, 01 Dec 2013 06:24:28 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/fontstyle.css" />
	<link rel="stylesheet" type="text/css" href="css/lowStockTablestyle.css" />
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
<?php 
session_start();


//$emp_id =$_POST['emp_id'];
$emp_id=$_SESSION['id'];

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "btp";


 $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");


$query=mysql_query("select patient_id from student_info where emp_id='$emp_id'" );
echo"<table width='311'height='138'>";
echo"<tr>
		<td width='50'>
		 Doctor
		</td>
		<td width='46' >
         Email
		</td>
		</tr>";
while($rows=mysql_fetch_array($query))
    {
    $x=$rows['patient_id'];
    $q=mysql_query("select * from patient_info where patient_id='$x'");
    $v=mysql_fetch_array($q);
    //$result=$result .$v['record'].",";
	
	//$test=$test."-".$v['r_date']."-" .$v['test_report']."\n";

    
	}
?>
