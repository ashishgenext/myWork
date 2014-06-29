<!DOCTYPE html>
<html lang="en">
  <head>



    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Sun, 01 Dec 2013 06:24:28 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>

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
                  <a href="#" shape="rect">Admin Page</a>
                </li>


              </ul>
            </div>
            <!-- end horizontal navigation -->
            <!--  content -->


		    <div id="content">
              <div id="center">
                <div id="welcome">
                  


				
<?php
session_start();

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$emp_id=$_POST['emp_id'];
$batch=$_POST['batch'];
//$result=mysql_query("SELECT * FROM student_info where emp_id='$emp_id' AND patient_id='1'");


$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "btp";

//echo $user;
 $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

//$result=mysql_query("SELECT * FROM student_info where emp_id='$emp_id' AND patient_id='1'");

if($fname!="")
	{
	//$choose=$fname;
	$result=mysql_query("SELECT * FROM student_info where fname='$fname' AND patient_id='1'");
	}
else{
if($lname!="")
	{
	//$choose=$lname;
	$result=mysql_query("SELECT * FROM student_info where lname='$lname' AND patient_id='1'");
	}
else{
if($dob!="")
	{
	$result=mysql_query("SELECT * FROM student_info where dob='$dob' AND patient_id='1'");
	
	}
else{
if($emp_id!="")
	{
	$result=mysql_query("SELECT * FROM student_info where emp_id='$emp_id' AND patient_id='1'");
	
	}
else {
if($batch!="")
	{
	mysql_query("DELETE FROM student_info where batch='$batch'");
	header("location: admin_work.php?remarks=success");
	}
}
}
}
}



?>


      <table border="3" style= "background-color: White; color: #761a9b; margin: 1 auto;" >
      <thead>
        <tr>
          <th>Employee_id</th>
          <th>First Name</th>
		  <th>Last Name</th>
		  <th>Date of birth</th>
		  
		  <th>Delete</th>
          
        </tr>
      </thead>
      <tbody>
<br>     
	 <form action="student_report.php" method="post">
	 <?php 
  while( $row = mysql_fetch_array( $result ) )
  {
            echo
            "<tr>
              <td>{$row['emp_id']}</td>
              <td>{$row['fname']}</td>
              <td>{$row['lname']}</td>
			  <td>{$row['dob']}</td>
			  <td width='65'><input type='radio' name='book_check_box' value='{$row['emp_id']}'></td>
            </tr>\n";
          } 
		
mysql_close($bd);		
      ?>
	  
	  </tbody>
    </table>
	<input name="submit" type="submit" id="submit"   value="Select" />

</form>






                </div>
              </div>
              
			  
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
</html>