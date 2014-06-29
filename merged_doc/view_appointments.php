<!DOCTYPE html>
<html lang="en"> 
<head>
		<link rel="stylesheet" href="css/bootstrap.css" media="all">
		<link rel="stylesheet" type="text/css" media="all" href="css/calandar/jsDatePick_ltr.css" />
        <link rel="stylesheet" type="text/css" href="css/lowStockTablestyle.css" />
		
	</head>
	
<body>
<?php
session_start();

$doc_id=$_SESSION['id'];
require"connect.php";
$avail=mysql_query("SELECT * FROM doctor_record where emp_id='$doc_id' ");

$values=mysql_fetch_array($avail);
$name=$values['name'];
mysql_close($bd);
?>
<br><br>
<div class="form-horizontal">
<div class="well" style="text-align: center;">
				<h4>WELCOME Dr.<?php echo $name?></h3>
				<form action="user_login_emp.html">
    <input type="submit"class="btn btn-success" value="Log Out">
                </form>
				
</div>
<div class="row container">
<div class="well" >
<form action="new_doctor_page.php">
    <input type="submit"class="btn btn-success" value="Back">
</form>
</div>
</div>

<div class="row container">
<div class="well" >

<?php
$date=$_POST['appointment_date'];
echo"<form method='POST' action='search_patient.php'>";
if($date)
{
$query="SELECT app_date,app_slot,patient_name,problems,patient_id FROM new_appointment WHERE app_date='".$date."' AND doctor_id ='".$doc_id."'";
require("connect.php");
$result=mysql_query($query,$bd);
echo"<table  class='table-bordered'>";
		echo"<tr>
		<th width='50'>
		 Appointment Date
		</th>
		<th width='20'>
		 Appointment Slot
		</th>
		<th width='100' >
         Patient Name
		</th>
		<th width='300'>
		 Problems/Pusrpose
		</th>
		<th width='300'>
		 Check Out
		</th>
		</tr> ";
while($row=mysql_fetch_row($result))
{ 
   echo"<tr>";
   for($i=0;$i<5;$i++)
			{
			  echo"<td>".$row[$i]."</td>";
			  //echo $row[1];
			}
   echo"<td width='65'><input type='radio' name='check_patient_record' value='$row[4]'>Check</td>";
   echo"</tr>";
   echo"<br>";
			  
}
echo"</table>";
mysql_close($bd);
}
?>
<br>
		<br>
		<input name="submit" type="submit" id="submit"  value="Check Out" formaction="search_patient.php" />
        </form>
</div>
</div>

<br>

</div>
</body>
</html>