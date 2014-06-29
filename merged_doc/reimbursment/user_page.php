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
                  <a href="#" shape="rect">USER INFO</a>
                </li>


              </ul>
            </div>
            <!-- end horizontal navigation -->
            <!--  content -->


		    <div id="content">
              <div id="center">
                <div id="welcome">
                  <h3>PERSON DETAILS</h3>


				 <form method="post" action="">
<br>

<?php
session_start();
if($_SESSION['id'] !=NULL)
{
$emp_id= $_SESSION['id'];



$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "btp";


 $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

$avail=mysql_query("SELECT * FROM student_info where emp_id='$emp_id' and patient_id='1'");
$values=mysql_fetch_array($avail);

$fname=$values['fname'];
$lname=$values['lname'];
$address=$values['address'];
$dob=$values['dob'];
$guardian=$values['guardian'];
$sex=$values['sex'];
$contact=$values['contact'];
$emergency=$values['emergency'];
$designation=$values['designation'];
$batch=$values['batch'];
$branch=$values['branch'];


$query=mysql_query("select patient_id from student_info where emp_id='$emp_id'" );

   $result="";
   while($rows=mysql_fetch_array($query))
    {
    $x=$rows['patient_id'];
    $q=mysql_query("select record from patient_info where patient_id='$x'");
    $v=mysql_fetch_array($q);
    $result=$result .$v['record'].",";

    }
 // $record=mysql_query("SELECT patient_id FROM patient_info ORDER BY patient_id DESC LIMIT 1;");
   //$z=mysql_fetch_array($record);
   //$add=$z['patient_id']+1;

//$val=mysql_query("select name,batch from drug_record");
mysql_close($bd);
}
else 
{
header("location: logout.php?remarks=fail");
//session_destroy();
}



?>

<br>
 <form method="post" action="">
                                <br>
                               <?php
                                echo "NAME : ". "$fname" ." "."$lname"."<br>" ;
                                echo "<br>" ;
                                echo "Enrollment/Emp ID : ". "$emp_id"."<br>"  ;
                                echo "<br>" ;
                                echo "Date of Birth : ". "$dob"."<br>"  ;
                                echo "<br>" ;
                                echo "Address : ". "$address"."<br>"  ;
                                echo "<br>" ;
                                echo "SEX : ". "$sex"."<br>"  ;
                                echo "<br>" ;
                                echo "Guardian Name : ". "$guardian"."<br>"  ;
                                echo "<br>" ;
                                echo "Contact : ". "$contact"."<br>"  ;
                                echo "<br>" ;
                                echo "Branch : ". "$branch"."<br>"  ;
                                echo "<br>" ;

                                echo "Batch : ". "$batch"."<br>"  ;
                                echo "<br>" ;

                                echo "Emergency Contact : ". "$emergency"."<br>"  ;
                                echo "<br>" ;
                                echo "Designation : ". "$designation"."<br>"  ;
                                echo "<br>" ;
                                echo "Medical History : ". "$result"."<br>"  ;
                                echo "<br>"

                                ?>


</form>






                </div>
              </div>
              <div id="right">
                <div id="sidebar">
                  <h3>Patient Management</h3>
                  <ul class="vmenu">
                    <li>
                      <a href="edit_user.php" shape="rect">Edit Patient Details</a>
                    </li>
                    <li>
                      <a href="2ndappointment.php" shape="rect">Appointment Scheduler</a>
                    </li>
                    <li>
                    <a href="reimbursment/reimbursmentMain.php" shape="rect">Reimbursement Form</a>
                    </li>
					 <li>
                    <a href="logout.php" shape="rect">Logout</a>
                    </li>


                  </ul>

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
</html>3