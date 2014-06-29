<html>
 <head>
    
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/fontstyle.css" />
	<link rel="stylesheet" type="text/css" href="css/lowStockTablestyle.css" />
    <link id="theme" rel="stylesheet" type="text/css" href="css/style.css" title="theme" />
    <link rel="stylesheet" type="text/css" href="css/lowStockTablestyle.css" />
	<link href="css/travotel_flexcroll.css" rel="stylesheet" type="text/css" />
	<link href="css/travotel.css" rel="stylesheet" type="text/css" media="all" />
	<!--calandar-->
<link rel="stylesheet" type="text/css" media="all" href="css/calandar/jsDatePick_ltr.css" />
<script type="text/javascript" src="js/calandar/jsDatePick.min.1.3.js"></script>
  </head>
<body>  
<!--  content --> 
<div id="content">
               
                 
                  <h3>Doctors Appointment </h3>
				  <br>
				  
				  
				  
				  
				  
		<?php
		session_start();
		$id=$_SESSION['id'];
        require("connect.php");
		//$id=$_POST['book_check_box'];
		//echo $id;
		$query="SELECT * from doctor_record where emp_id='$id'";
        $result=mysql_query($query,$bd);
		$row=mysql_fetch_row($result);
		echo "<h4 align='center'>&nbsp; &nbsp;Schedule for Dr.".$row[0].":</h4>";
		echo"<div class='CSSTableGenerator'>";
		echo"<table class='table table-condensed'>";
		echo"<tr>
		<td class='span2'>
		 Day
		</td>
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
		
		/*Replaceable code repeats upto Sunday*/
		echo"<tr>
		  
		<td>Monday</td>";
		if($row[12]=='unavailable')
		{
		  for($i=1;$i<9;$i++)
		  {
		  echo"<td width='50'>
		  <font color='pink'>unavail</font>
		  </td>";
		  }
		}
		else
		{
		  for($i=10;$i<18;$i++)
		  {
		   if($i<$row[13]||$i>$row[14])
           {
		    echo"<td width='50'>
		         <font color='pink'>unavail</font>
		         </td>"; 
		   }
		   else
		   {
		      echo"<td width='50'>
		         <font color='Green'>avail</font>
		         </td>"; 
		   }
            		   
		  }
		
		}
		echo"</tr>";
		
		
		echo"<tr>
		  
		<td>Tuesday</td>";
		if($row[15]=='unavailable')
		{
		  for($i=1;$i<9;$i++)
		  {
		  echo"<td width='50'>
		  <font color='pink'>unavail</font>
		  </td>";
		  }
		}
		else
		{
		  for($i=10;$i<18;$i++)
		  {
		   if($i<$row[16]||$i>$row[17])
           {
		    echo"<td width='50'>
		         <font color='pink'>unavail</font>
		         </td>"; 
		   }
		   else
		   {
		      echo"<td width='50'>
		         <font color='Green'>avail</font>
		         </td>"; 
		   }
            		   
		  }
		
		}
		echo"</tr>";
		
		
		echo"<tr>
		  
		<td>Wednesday</td>";
		if($row[18]=='unavailable')
		{
		  for($i=1;$i<9;$i++)
		  {
		  echo"<td width='50'>
		  <font color='pink'>unavail</font>
		  </td>";
		  }
		}
		else
		{
		  for($i=10;$i<18;$i++)
		  {
		   if($i<$row[19]||$i>$row[20])
           {
		    echo"<td width='50'>
		         <font color='pink'>unavail</font>
		         </td>"; 
		   }
		   else
		   {
		      echo"<td width='50'>
		         <font color='Green'>avail</font>
		         </td>"; 
		   }
            		   
		  }
		
		}
		echo"</tr>";
		
		echo"<tr>
		  
		<td>Thursday</td>";
		if($row[21]=='unavailable')
		{
		  for($i=1;$i<9;$i++)
		  {
		  echo"<td width='50'>
		  <font color='pink'>unavail</font>
		  </td>";
		  }
		}
		else
		{
		  for($i=10;$i<18;$i++)
		  {
		   if($i<$row[22]||$i>$row[23])
           {
		    echo"<td width='50'>
		         <font color='pink'>unavail</font>
		         </td>"; 
		   }
		   else
		   {
		      echo"<td width='50'>
		         <font color='Green'>avail</font>
		         </td>"; 
		   }
            		   
		  }
		
		}
		echo"</tr>";
		
		
		echo"<tr>
		  
		<td>Friday</td>";
		if($row[24]=='unavailable')
		{
		  for($i=1;$i<9;$i++)
		  {
		  echo"<td width='50'>
		  <font color='pink'>unavail</font>
		  </td>";
		  }
		}
		else
		{
		  for($i=10;$i<18;$i++)
		  {
		   if($i<$row[25]||$i>$row[26])
           {
		    echo"<td width='50'>
		         <font color='pink'>unavail</font>
		         </td>"; 
		   }
		   else
		   {
		      echo"<td width='50'>
		         <font color='Green'>avail</font>
		         </td>"; 
		   }
            		   
		  }
		
		}
		echo"</tr>";
		
		
		echo"<tr>
		  
		<td>Satday</td>";
		if($row[27]=='unavailable')
		{
		  for($i=1;$i<9;$i++)
		  {
		  echo"<td width='50'>
		  <font color='pink'>unavail</font>
		  </td>";
		  }
		}
		else
		{
		  for($i=10;$i<18;$i++)
		  {
		   if($i<$row[28]||$i>$row[29])
           {
		    echo"<td width='50'>
		         <font color='pink'>unavail</font>
		         </td>"; 
		   }
		   else
		   {
		      echo"<td width='50'>
		         <font color='Green'>avail</font>
		         </td>"; 
		   }
            		   
		  }
		
		}
		echo"</tr>";
		
		echo"<tr>
		  
		<td>Sunday</td>";
		if($row[30]=='unavailable')
		{
		  for($i=1;$i<9;$i++)
		  {
		  echo"<td width='50'>
		  <font color='pink'>unavail</font>
		  </td>";
		  }
		}
		else
		{
		  for($i=10;$i<18;$i++)
		  {
		   if($i<$row[31]||$i>$row[32])
           {
		    echo"<td width='50'>
		         <font color='pink'>unavail</font>
		         </td>"; 
		   }
		   else
		   {
		      echo"<td width='50'>
		         <font color='Green'>avail</font>
		         </td>"; 
		   }
            		   
		  }
		
		}
		echo"</tr>";
		
		
	    echo"</table>";
		
		?>
		
		</div>
		<br><br>
		
		