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
<?php
session_start();
$id=$_SESSION['id'];
 require("connect.php");
		
		$query="SELECT * from doctor_record where emp_id='$id'";
        $result=mysql_query($query,$bd);
		$row=mysql_fetch_row($result);
?>


<div class="search_bg">
		<div class="doted_border">
        <h2>Book It ! </h2>
		</div>
		
		<div class="search_form">
		<form name ="bookApp" method="post" action="book_backend.php">
		
		
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<!--Sub slot &nbsp &nbsp <select name="sub_slot">
		<option value='1'>1</option><option value='2'>2</option><option value='3'>3</option>
		</select>-->
		Appointment Date &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<br><br>
		<?php
		echo"<input type='text' name='app_date'  value='".$_SESSION['app_date']."'  />"
		?>
		<br><br>
		Slot &nbsp &nbsp <?php
		echo"<input type='text' name='app_slot' value='".$_SESSION['app_slot']."' />"
		?>
		<br><br>
		Doctor's Id &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<br><br>
		<?php
		echo"<input type='text' name='doctor_id' value='".$_SESSION['id']."' />"
		?>
		<br><br>
		Doctor's Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<br><br>
		<?php
		echo"<input type='text' name='doctor_name' value='".$row[0]."' />"
		?>
		<br><br>
	    Patient Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<br><br>
		<input type="text" name="patient_name" />
		<br><br>
		Patient Id &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<br><br>
		<input type="text" name="patient_id" />
		<br><br>
	    Problems &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<br><br>
		<textarea name="problems" rows="5" cols="50"></textarea>
		<input name="submit" type="submit" id="submit"  value="Book" />
		</form>
		</div>
		
		
		</div>
		
		
		
		       
          
        		 

              <div class="clear" style="height:40px"></div>
           </div> 
            <!-- end content -->
         </div>
          <!-- end container -->
        
        
       </div>
	   </div> 