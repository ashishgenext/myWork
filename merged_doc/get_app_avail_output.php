<html>
 <head>
    
    <title></title>
    
	<link rel="stylesheet" type="text/css" href="css/fontstyle.css" />
	<link rel="stylesheet" type="text/css" href="css/lowStockTablestyle.css" />
    <link id="theme" rel="stylesheet" type="text/css" href="css/style.css" title="theme" />
    <link rel="stylesheet" type="text/css" href="css/lowStockTablestyle.css" />
	<link href="css/travotel_flexcroll.css" rel="stylesheet" type="text/css" />
	<link href="css/travotel.css" rel="stylesheet" type="text/css" media="all" />
	
<?php
session_start();
require("connect.php");
$app_date=$_POST['app_date'];
$app_slot=$_POST['app_slot'];
$doctor_id=$_POST['doctor_id'];
$_SESSION['app_date']=$app_date;
$_SESSION['app_slot']=$app_slot;
$query="SELECT COUNT( * )
FROM new_appointment
WHERE app_date='$app_date' 
      AND app_slot = '$app_slot' 
	  AND doctor_id = '$doctor_id'";
$count=mysql_query($query,$bd);
$row=mysql_fetch_row($count);

$queryA="SELECT COUNT( * )
FROM new_appointment
WHERE app_date='$app_date' 
      AND app_slot = 'A' 
	  AND doctor_id = '$doctor_id'";
$countA=mysql_query($queryA,$bd);
$rowA=mysql_fetch_row($countA);

$queryB="SELECT COUNT( * )
FROM new_appointment
WHERE app_date='$app_date' 
      AND app_slot = 'B' 
	  AND doctor_id = '$doctor_id'";
$countB=mysql_query($queryB,$bd);
$rowB=mysql_fetch_row($countB);
$queryC="SELECT COUNT( * )
FROM new_appointment
WHERE app_date='$app_date' 
      AND app_slot = 'C' 
	  AND doctor_id = '$doctor_id'";
$countC=mysql_query($queryC,$bd);
$rowC=mysql_fetch_row($countC);
$queryD="SELECT COUNT( * )
FROM new_appointment
WHERE app_date='$app_date' 
      AND app_slot = 'D' 
	  AND doctor_id = '$doctor_id'";
$countD=mysql_query($queryD,$bd);
$rowD=mysql_fetch_row($countD);
$queryE="SELECT COUNT( * )
FROM new_appointment
WHERE app_date='$app_date' 
      AND app_slot = 'E' 
	  AND doctor_id = '$doctor_id'";
$countE=mysql_query($queryE,$bd);
$rowE=mysql_fetch_row($countE);
$queryF="SELECT COUNT( * )
FROM new_appointment
WHERE app_date='$app_date' 
      AND app_slot = 'F' 
	  AND doctor_id = '$doctor_id'";
$countF=mysql_query($queryF,$bd);
$rowF=mysql_fetch_row($countF);
$queryG="SELECT COUNT( * )
FROM new_appointment
WHERE app_date='$app_date' 
      AND app_slot = 'G' 
	  AND doctor_id = '$doctor_id'";
$countG=mysql_query($queryG,$bd);
$rowG=mysql_fetch_row($countG);
$queryH="SELECT COUNT( * )
FROM new_appointment
WHERE app_date='$app_date' 
      AND app_slot = 'H' 
	  AND doctor_id = '$doctor_id'";
$countH=mysql_query($queryH,$bd);
$rowH=mysql_fetch_row($countH);

if($row[0]>=3)
{
   echo"<img src='img/booked.jpg'><br>";
   //echo"<h3>Sorry!The slot is full!</h3>";
   echo"<br><br>";
   echo"<div class='CSSTableGenerator'>";
   echo"<table width='311'height='138'>";
		echo"<tr>
		<td width='50' >
         Slot A
		 <br><font color='pink'>10am-11am</font>
		</td>
		<td width='50'>
		  Slot B
		  <br><font color='pink'>11am-12</font>
		</td>
		<td width='50'>
		  Slot C
		  <br><font color='pink'>12-13pm</font>
		</td>
		<td width='50'>
		  Slot D
		  <br><font color='pink'>13pm-14pm</font>
		</td>
		<td width='50'>
		  Slot E
		  <br><font color='pink'>14pm-15pm</font>
		</td>
		<td width='50'>
		  Slot F
		  <br><font color='pink'>15pm-16pm</font>
		</td>
		<td width='50'>
		  Slot G
		  <br><font color='pink'>16pm-17pm</font>
		</td>
		<td width='50'>
		  Slot H
		  <br><font color='pink'>17pm-18pm</font>
		</td>
		</tr> ";
		echo"<tr>";
		echo"<td width='50'>";
		if($rowA[0]>=3)
		{
		  echo"<font color='pink'>unavail</font>";
		}
		else
		{
		   echo"<font color='Green'>avail</font>";
		}
		echo"</td>";
		
		echo"<td width='50'>";
		if($rowB[0]>=3)
		{
		  echo"<font color='pink'>unavail</font>";
		}
		else
		{
		   echo"<font color='Green'>avail</font>";
		}
		echo"</td>";
		
		echo"<td width='50'>";
		if($rowC[0]>=3)
		{
		  echo"<font color='pink'>unavail</font>";
		}
		else
		{
		   echo"<font color='Green'>avail</font>";
		}
		echo"</td>";
		
		echo"<td width='50'>";
		if($rowD[0]>=3)
		{
		  echo"<font color='pink'>unavail</font>";
		}
		else
		{
		   echo"<font color='Green'>avail</font>";
		}
		echo"</td>";
		
		echo"<td width='50'>";
		if($rowE[0]>=3)
		{
		  echo"<font color='pink'>unavail</font>";
		}
		else
		{
		   echo"<font color='Green'>avail</font>";
		}
		echo"</td>";
		
		echo"<td width='50'>";
		if($rowF[0]>=3)
		{
		  echo"<font color='pink'>unavail</font>";
		}
		else
		{
		   echo"<font color='Green'>avail</font>";
		}
		echo"</td>";
		
		echo"<td width='50'>";
		if($rowG[0]>=3)
		{
		  echo"<font color='pink'>unavail</font>";
		}
		else
		{
		   echo"<font color='Green'>avail</font>";
		}
		echo"</td>";
		
		echo"<td width='50'>";
		if($rowH[0]>=3)
		{
		  echo"<font color='pink'>unavail</font>";
		}
		else
		{
		   echo"<font color='Green'>avail</font>";
		}
		echo"</td>";
		echo"</tr>";
	echo"</table>";
	echo"</div>";	
   echo"<br><br>";
   
   
   
   
   
   echo"<form target ='left_space' action='get_app_avail.php'>";
   echo"<br>";
   echo"<input name='back' type='submit' id='back'  value='Back To Availability' />";   
   echo"</form>";
   }
else
{    
     echo"
	  <h3>Available</h3><br><br><br><br><br><br>";
	 echo"&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp";
     echo"<a href='book_app.php'>
	 <img src='img/book.jpg'></a><br>";
	 echo"<br>";
	  
	 

}

mysql_close($bd);

?>