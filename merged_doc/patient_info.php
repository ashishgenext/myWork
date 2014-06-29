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


				 <form method="post" action="generate_doc.php">
<?php
session_start();


$emp_id =$_POST['emp_id'];
$_SESSION['id']=$emp_id;

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
 
 //echo "No record found" ;
header("location:no_record.html?remarks=success");
}
$values=mysql_fetch_array($avail);

//header("location:patient_info.html?remarks=success");

$query=mysql_query("select patient_id from student_info where emp_id='$emp_id'" );

   $result="";
   $test="";
   $date="";
   while($rows=mysql_fetch_array($query))
    {
    $x=$rows['patient_id'];
    $q=mysql_query("select * from patient_info where patient_id='$x'");
    $v=mysql_fetch_array($q);
    $result=$result .$v['record'].",";
	
	$test=$test."-".$v['r_date']."-" .$v['test_report']."\n";

    }
 // $record=mysql_query("SELECT patient_id FROM patient_info ORDER BY patient_id DESC LIMIT 1;");
   //$z=mysql_fetch_array($record);
   //$add=$z['patient_id']+1;

$val=mysql_query("select name,batch from drug_record");

mysql_close($bd);


?>

<br>
Enrollment/Employee ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="text" name="emp_id" value="<?php echo $values['emp_id']; ?>" readonly="readonly"><br><br>
First Name &nbsp
<input type="text" name="fname" value="<?php echo $values['fname']; ?>" readonly="readonly"> &nbsp;&nbsp;
Last Name &nbsp
<input type="text" name="lname" value="<?php echo $values['lname']; ?>" readonly="readonly"> <br><br>
Address &nbsp <br>
<textarea name="address" rows="10"  cols="50" readonly="readonly"> <?php echo $values['address']?>  </textarea>

<br>
<br>
Sex &nbsp
<input type="text" name="sex" value="<?php echo $values['sex']; ?>" readonly="readonly"> &nbsp;&nbsp;<br>
Contact no<br>
<input type="text" name="contact" value="<?php echo $values['contact']; ?>" readonly="readonly"> <br>
Date of Birth <br>
<input type="text" name="dob" value="<?php echo $values['dob']; ?>" readonly="readonly"> <br>

Email ID <br>
<input type="text" name="email" value="<?php echo $values['email']; ?>" readonly="readonly"> <br>

Guardian name<br>
<input type="text" name="guardian" value="<?php echo $values['guardian']; ?>" readonly="readonly"> <br>

Emergency Contact <br>
<input type="text" name="emergency" value="<?php echo $values['emergency']; ?>" readonly="readonly"> <br>

Problem history<br>
<textarea name="p_history" rows="10" cols="50" readonly="readonly"> <?php echo $result; ?> </textarea>

<br>
Test Reports <br>
<textarea name="blood_test" rows="10" cols="50"><?php echo $test; ?></textarea>

Diagnosed problem <br>
<textarea name="d_history" rows="10" cols="50"></textarea>
<br>


<br>

Consulatancy Department<br>
<select name="department">
  <option value="A">A</option>
  <option selected value="B">B</option>
</select><br>
<br>

<b>Prescribed Drugs </b> <br>
<select name="drugs[]" multiple="multiple">
  <?php

    while($row=mysql_fetch_array($val))
    {
    //echo $row['batch'];
    $batch=$row['name'];
     echo "<option value=\"$batch\">" . $row['name'] . "</option>";
  }
  ?>
</select><br>




<br>
<br>


<input name="submit" type="submit" id="submit" formaction="search_patient.html" formmethod="POST" value="Search Other Patient" /> &nbsp;&nbsp;
<input name="submit" type="submit" id="submit" formaction="generate_doc.php" formmethod="POST" value="submit" /> &nbsp;&nbsp;


</form>






                </div>
              </div>
              <div id="right">
                <div id="sidebar">
                  <h3>Patient Management</h3>
                  <ul class="vmenu">
                    <li>
                      <a href="#" shape="rect">Patient Details</a>
                    </li>
                    <li>
                      <a href="#" shape="rect">Patient Consultancy Record</a>
                    </li>
                    <li>
                      <a href="#" shape="rect">Invoice Generation</a>
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
</html>