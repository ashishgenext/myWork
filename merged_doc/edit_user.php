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
                  <a href="#" shape="rect">Patient Details</a>
                </li>


              </ul>
            </div>
            <!-- end horizontal navigation -->
            <!--  content -->


		    <div id="content">
              <div id="center">
                <div id="welcome">
                  <h3>INFORMATION </h3>


				 <form method="post" action="update_success.php">
<?php
session_start();

if($_SESSION['id'] !=NULL)
{

$emp_id=$_SESSION['id'];


$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "btp";


 $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

$avail=mysql_query("SELECT * FROM student_info where emp_id='$emp_id' and patient_id='1'");

//$values=mysql_fetch_array($avail);
if(mysql_num_rows($avail)==0)
{
 echo "No record find" ;

}
$values=mysql_fetch_array($avail);



mysql_close($bd);
}
else 
{
header("location: logout.php?remarks=fail");
}

?>

<br>
Enrollment/Employee ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="text" name="emp_id" value="<?php echo $values['emp_id']; ?>" readonly="readonly" ><br><br>
First Name &nbsp
<input type="text" name="fname" value="<?php echo $values['fname']; ?>" > &nbsp;&nbsp;
Last Name &nbsp
<input type="text" name="lname" value="<?php echo $values['lname']; ?>" > <br><br>
Guardian Name &nbsp
<input type="text" name="guardian" value="<?php echo $values['guardian']; ?>" > <br><br>
Password &nbsp
<input type="password" name="password" value="<?php echo $values['password']; ?>" > <br><br>
Health Card &nbsp
<input type="text" name="health_card" value="<?php echo $values['health_card']; ?>" > <br><br>


Address &nbsp <br>
<textarea name="address" rows="10"  cols="50" > <?php echo $values['address']?>  </textarea>

<br>
<br>
Contact no<br>
<input type="text" name="contact" value="<?php echo $values['contact']; ?>" > <br>
Emergency Contact no<br>
<input type="text" name="emergency" value="<?php echo $values['emergency']; ?>" > <br>
Batch<br>
<input type="text" name="batch" value="<?php echo $values['batch']; ?>" > <br>
Branch<br>
<input type="text" name="branch" value="<?php echo $values['branch']; ?>" > <br>

Date of Birth <br>
<input type="text" name="dob" value="<?php echo $values['dob']; ?>" > <br>

Email ID <br>
<input type="text" name="email" value="<?php echo $values['email']; ?>" > <br>









<br>
<br>



<input name="submit" type="submit" id="submit" formaction="update_success.php" formmethod="POST" value="Update" /> &nbsp;&nbsp;


</form>






                </div>
              </div>
			
			<div id="right">
                <div id="sidebar">
                  <h3>Patient Management</h3>
                  <ul class="vmenu">
                    
					 <li>
                    <a href="user_page.php" shape="rect">Home</a>
                    </li>

					 <li>
                    <a href="logout.php" shape="rect">Logout</a>
                    </li>


                  </ul>

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