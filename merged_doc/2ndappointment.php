<!DOCTYPE html>
<html lang="en">
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
  <body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>Web site</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="title" content="Web site" />
    <meta name="description" content="Site description here" />
    <meta name="keywords" content="keywords here" />
    <meta name="language" content="en" />
    <meta name="subject" content="Site subject here" />
    <meta name="robots" content="All" />
    <meta name="copyright" content="Your company" />
    <meta name="abstract" content="Site description here" />
    <meta name="MSSmartTagsPreventParsing" content="true" />
    <link id="theme" rel="stylesheet" type="text/css" href="css/style.css" title="theme" />
  </head>
  <body> 
    <div id="wrapper"> 
      <div id="bg"> 
        <div id="header"></div>  
        <div id="page"> 
          <div id="container"> 
                       <div id="banner"></div> <!-- banner -->  
  
            <!-- end banner -->  
            <!-- horizontal navigation -->  
            <div id="nav1"> 
              <ul>
                <li id="current" style="border:none">
                  <a href="user_page.php" shape="rect">HOME</a>
                </li>
                
                
              </ul> 
            </div>  
            <!-- end horizontal navigation -->  
            <!--  content --> 
            <div id="content"> 
              <div id="center"> 
                <div id="welcome"> 
                  <h3>Doctors Appointment </h3> 
        <h4 align="center">&nbsp; &nbsp;List of Doctors:</h4>
		<div class="CSSTableGenerator" >
		
		<form name="checkSchedule" method="post" action="individual_schedule.php">
		<?php
		require("connect.php");
		$list_doctors = "SELECT name,email,degree,mobile,speciality,treatment,emp_id FROM doctor_record";
		$result = mysql_query($list_doctors,$bd);
		echo"<table width='311'height='138'>";
		echo"<tr>
		<td width='50'>
		 Doctor
		</td>
		<td width='46' >
         Email
		</td>
		<td width='41'>
		  Degree
		</td>
		<td width='41'>
		   Mobile
		</td>
		<td width='41'>
			Speciality
		</td>
		<td width='65'>
			Treatment
		</td>
		<td width='41'>
		    Check Schedule
		</td>
		      </tr> ";
			  $j=0;
		while($row=mysql_fetch_row($result))
		{
		   echo "<tr>";
           for($i=0;$i<6;$i++)
			{
			  echo"<td>".$row[$i]."</i></td>";
			  //echo $row[1];
			}
			
			echo"<td width='65'><input type='radio' name='book_check_box' value='$row[6]'>Check</td>";
			echo"</tr>";
	    }
		echo"</table>";
		mysql_close($bd);
		
		?>
		 </div>
         </div>
		<br>
		<br>
		<input name="submit" type="submit" id="submit"  value="Check Out" />
		</form>
		</div>
		
               

              <div class="clear" style="height:40px"></div>
            </div>
            <!-- end content -->
          </div>
          <!-- end container -->
        </div>
        <div id="footerWrapper">
          <div id="footer">
            <p style="padding-top:10px">
             
 IIT MANDI HOSPITAL MANAGEMENT SYSTEM           </p> 
          </div> 
        </div> 
      </div> 
    </div> 
  </body>
</html>

  </body>
</html>3