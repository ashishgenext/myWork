<html>
<head>
		<link rel="stylesheet" href="css/bootstrap.css" >
		<link rel="stylesheet" type="text/css" media="all" href="css/calandar/jsDatePick_ltr.css" />
        <link rel="stylesheet" type="text/css" href="css/lowStockTablestyle.css" />
		
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
<div class="well" style="text-align: center;">
				<div class="form-horizontal">

<a href="http://www.iitmandi.ac.in" target="_blank">
<img class="img-circle" href src="img/logo.jpg">
</a>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp

<img class="img-circle" src="img/symbol.png">
				<h3>WELCOME Dr.<?php echo $name?></h3>
				<br>
				<form action="user_login_emp.html">
    <input type="submit"class="btn btn-primary" value="Log Out">
                </form>
				
</div>
<div class="row container">
<div class="well" >
<h4>Would you like to view appointments : </h4>
<form name="viewApp" method="POST" action="view_appointments.php" >
						<div class="control-group">
							<label class="control-label"><h5>Select Date :<h5> </label>
							<div class="controls">
								<input class="input-medium" pattern="[A-Z a-z 0-9 -]*" value="<?php $cdate=date("Y-m-d");echo $cdate;?>" name="appointment_date"id="inputField" required>
							</div>
						</div>
					   
						<div>
							<input  type="submit" class="btn btn-success"  />
						</div>
</form>
</div>
</div>

<br>

</div>



<br>

<div class="row container">
<div class="well" >

<div id="right">
                <div id="sidebar">
                  <h3>Navigation</h3>
                  <ul class="vmenu">
                    <li>
                      <a href="search_patient.php" shape="rect">Search Patients</a>
                    </li>
                    <li>
                      <a href="doctor_drug_table.php" shape="rect">Available Drugs </a>
                    </li>
					<li>
                      <a href="update_doctor_info.php" shape="rect">Edit Personal Info</a>
                    </li>

                  </ul>

                  </div>
</div>
</div>
</div>
</body>
</html>