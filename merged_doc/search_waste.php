<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css" media="all">
		<link rel="stylesheet" type="text/css" media="all" href="css/calandar/jsDatePick_ltr.css" />
        <script type="text/javascript" src="js/calandar/jsDatePick.min.1.3.js"></script>

<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%Y-%M-%d"
		});
	};
</script>
	</head>
	
    <body>
		<br><br>
		<div class="form-horizontal">
			<div class="well" style="text-align: center;">
				<h4>BIOMEDICAL WASTAGE RECORD</h3>
				<h4><font color="green">[SEARCH AREA]</font></h3>
			</div>
			<div class="row container">
				<div class="well" >
					<?php
					 //ini_set();
					error_reporting(E_ERROR);
					$headers = "MIME-Version: 1.0\n";
					$headers .= "Content-type: text/plain; charset=iso-8859-2\nContent-Transfer-Encoding: 8bit\nX-Priority: 1\nX-MSMail-Priority: High\n";
					$headers .= "From: <shekhar@entronic.com>\n" . "Reply-To: <shekhar@entronic.com>\n";
					$success = mail("saveena_rajput@students.iitmandi.ac.in", "text", "test");
					//ini_set();
					echo $success;
					?>
					<h5>Please fill all the details : </h5>
					<form name="myForm" method="POST" >
						<div class="control-group">
							<label class="control-label">Select Date : </label>
							<div class="controls">
								<input class="input-medium" pattern="[A-Z a-z 0-9 -]*" name="waste_date" id="inputField" required>
							</div>
						</div>
					   
						<div>
							<input  type="submit" class="btn btn-success"  />
						</div>
					</form>
					<br>
<div id="txtHint"><b>Waste info will be listed here.</b></div>
				</div>
				</div>
				<br><br>
<div class="row container">
<div class="well" >
<?php
$q=$_POST['waste_date'];
if($q)
{
require"connect.php";
$sql="SELECT * FROM waste_record WHERE waste_date = '".$q."'";
$result = mysql_query($sql,$bd);
$row=mysql_fetch_row($result);

echo "<table class='table-bordered'>
<tr>
<th><font color='yellow'>Yello</font></th>
<th></th>
<th><font color='blue'>Blue</font></th>
<th><font color='red'>Red</font></th>
<th>Others</th>
<th></th>
<th>Total Under 'YRB'</th>
<th>Total Under 'Others'</th>

</tr>
<br>
<tr>

<td><font size=2 color='yellow'>Catagory 1</font></td>

<td><font size=2 color='yellow'>Catagory 6</font></td>

<td><font size=2 color='blue'>Catagory 4</font></td>

<td><font size=2 color='red'>Catagory 7</font></td>

<td><font size=2>Catagory 8</font></td>

<td><font size=2>Catagory 10</font></td>
<td></td>
<td></td>
</tr>";
$sum=0;
for($i=1;$i<5;$i++)
{
 $sum=$sum+$row[$i];
}
$sum2=0;
for($i=5;$i<7;$i++)
{
 $sum2=$sum2+$row[$i];
}
echo "<tr>";
  echo "<td>" . $row[1] . "</td>";
  echo "<td>" . $row[2] . "</td>";
  echo "<td>" . $row[3] . "</td>";
  echo "<td>" . $row[4] . "</td>";
  echo "<td>" . $row[5] . "</td>";
  echo "<td>" . $row[6] . "</td>";
  echo "<td>" . $sum . "</td>";
  echo "<td>" . $sum2 . "</td>";
  echo "</tr>";

echo "</table>";

mysql_close($bd);
}
?>
</div></div>
<br>
<div class="row container">
<div class="well" >
<h5>Search record for particular year,month : </h5>
					<form name="myForm2" method="POST" >
						<div class="control-group">
							<label class="control-label">Month : </label>
							<div class="controls">
								<!-- <input class="input-medium" name="designation" value="" required> -->
								<select class="input-medium" name="month">
									<option value="01">Jan</option>
									<option value="02">Feb</option>
									<option value="03">March</option>
									<option value="04">April</option>
									<option value="05">May</option>
									<option value="06">June</option>
									<option value="07">July</option>
									<option value="08">August</option>
									<option value="09">Sept</option>
									<option value="10">Oct</option>
									<option value="11">Nov</option>
									<option value="12">Dec</option>
									
								</select>
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label">Year : </label>
							<div class="controls">
								<input class="input-medium" pattern="{2,0}[0-9]+[0-9]+"name="year" value="" required>
							</div>
						</div>
					   
						<div>
							<input  type="submit" class="btn btn-success"  />
						</div>
					</form>
					<br>
<div id="txtHint"><b>Total Monthly Waste Info will be listed here.</b></div>
</div>
</div>
				<br><br>
<div class="row container">
<div class="well" >
<?php
 $year=$_POST['year'];
 $month=$_POST['month'];
 $day_first='01';
 //echo $year;
 $date_first=$year.'-'.$month.'-'.$day_first;
 $date_first=strtotime($date_first);
 //echo $date_first;
 //echo"<br>";
 $day_last='01'; 
 // after this we need to check whether month is 12 or not
 if($month!=12)
 {
   $date_second=$year.'-'.($month+1).'-'.$day_last;
   //$date_second=strtotime($date_second);
   //echo $date_second;
 }
 else if($month == 12)
 {
   $date_second= ($year+1).'-'.($month+1).'-'.$day_last;
   //$date_second=strtotime($date_second);
 }
 $query="SELECT * FROM waste_record WHERE waste_date BETWEEN '$date_first' AND '$date_second'";
 require "connect.php";
 $month_result=mysql_query($query,$bd);
 $yellow_month_sum=0;
 $cat1_month_sum=0;
 $cat6_month_sum=0;
 $cat4_month_sum=0;
 $cat7_month_sum=0;
 $cat8_month_sum=0;
 $cat10_month_sum=0;
 $blue_month_sum=0;
 $red_month_sum=0;
 $other_month_sum=0;
 while($month_row=mysql_fetch_row($month_result))
 {
    
	  $cat1+=$month_row[1];
	  $cat6+=$month_row[2];
	  $cat4+=$month_row[2];
	  $cat7+=$month_row[2];
	  $cat8+=$month_row[2];
	  $cat10+=$month_row[2];
 }
 $yellow_month_sum=$cat1+$cat6;
 $blue_month_sum=$cat4;
 $red_month_sum=$cat7;
 $other_month_sum=$cat8+$cat10;
 if($year)
 {
 echo "<table class='table-bordered'>
<tr>
<th><font color='yellow'>Yello</font></th>
<th></th>
<th><font color='blue'>Blue</font></th>
<th><font color='red'>Red</font></th>
<th>Others</th>
<th></th>

</tr>
<br>
";

echo "<tr>";
  echo "<th>" . $cat1 . "</th>";
  echo "<th>" . $cat6 . "</th>";
  echo "<th>" . $cat4 . "</th>";
  echo "<th>" . $cat7 . "</th>";
  echo "<th>" . $cat8 . "</th>";
  echo "<th>" . $cat10 . "</th>";
  echo "</tr>
  
<tr>
<th><font color='yellow'>&nbsp&nbsp&nbsp$yellow_month_sum</font></th>
<th></th>
<th><font color='blue'>$blue_month_sum</font></th>
<th><font color='red'>$red_month_sum</font></th>
<th>&nbsp &nbsp &nbsp$other_month_sum</th>


</tr>";
  
  


echo "</table>";
}
mysql_close($bd);

?>	
</div></div>			
					
			</div>
		</div>
		
	</body>
</html>