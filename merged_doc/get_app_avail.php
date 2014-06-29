
<html>
 <head>
    
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/fontstyle.css" />
	<link rel="stylesheet" type="text/css" href="css/lowStockTablestyle.css" />
    <link id="theme" rel="stylesheet" type="text/css" href="css/style.css" title="theme" />
    <link rel="stylesheet" type="text/css" href="css/lowStockTablestyle.css" />
	<link href="css/travotel_flexcroll.css" rel="stylesheet" type="text/css" />
	<link href="css/travotel.css" rel="stylesheet" type="text/css" media="all" />
	<!--calandar-->
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
        <div class="search_bg">
		<div class="doted_border">
        <h2>Check Availability</h2>
		</div>
		<div class="search_form">
		<form name="check"method="post"target ="mid_space" action="get_app_avail_output.php">
		Appointment Date &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<br><br>
		<input type="text" name="app_date"  id="inputField"  />
		<br><br>
		Slot &nbsp &nbsp <select name="app_slot" onchange="showUser(this.value)">
		<option value="">Select a slot:</option><option value='A'>A</option><option value='B'>B</option><option value='C'>C</option><option value='D'>D</option><option value='E'>E</option><option value='F'>F</option><option value='G'>G</option><option value='H'>H</option>
		</select>
		<br><br>
		Doctor's Id &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<br><br>
		<?php
		session_start();
		echo"<input type='text' name='doctor_id' value='".$_SESSION['id']."' />"
		?>
		<br><br>
	  <input name="check" type="submit" id="check"  value="Check Availability" /> 
		
		</form>
		</div>
		</div>
		
</body>
</html>