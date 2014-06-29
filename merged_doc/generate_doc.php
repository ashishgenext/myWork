<?php
session_start();


$emp_id =$_POST['emp_id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "btp";


 $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

$record=mysql_query("SELECT patient_id FROM patient_info ORDER BY patient_id DESC LIMIT 1;");
$z=mysql_fetch_array($record);
$add=$z['patient_id']+1;
$day=date("Y/m/d");
$d_record=$_POST['d_history'];
$dept=$_POST['department'] ;
mysql_query("INSERT INTO patient_info(patient_id, r_date, record, dept) VALUES ('$add','$day','$d_record','$dept') ");
mysql_query("INSERT INTO student_info(patient_id, fname, lname, dob,emp_id) VALUES ('$add','$fname','$lname','$dob','$emp_id') ");

/*foreach ($_POST['drugs'] as $values)
{
    echo $values ."\n";
}*/
mysql_close($bd);
?>


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
                            <a href="#" shape="rect">Search Patient</a>
                        </li>


                    </ul>
                </div>
                <!-- end horizontal navigation -->
                <!--  content -->


                <div id="content">
                    <div id="center">
                        <div id="welcome">
                            <h3>INFORMATION </h3>


                            <form method="post" action="">
                                <br>
                               <?php
                                echo "NAME : ". "$fname" ."$lname"."<br>" ;
                                echo "<br>" ;
                                echo "Patient ID : "."$add"."<br>";
                                echo "<br>" ;
                                echo "Enrollment/Emp ID : ". "$emp_id"."<br>"  ;
                                echo "<br>" ;
                                echo "Date of Birth : ". "$dob"."<br>"  ;
                                echo "<br>" ;
                                echo "Diagnosed Problem : ". "$d_record"."<br>"  ;
                                echo "<br>" ;
                                echo "Medical Dept : " .$dept ;
                                echo "<br>" ;
                                echo "<br>" ;
                                echo "Drugs advised : "."<br>";
                                foreach ($_POST['drugs'] as $values)
                                {
                                    echo "-       " ;
                                    echo $values ."<br>";
                                }


                                ?>





                                <br>
                                <br>


                                <input name="submit" type="submit" id="submit" formaction="" formmethod="POST" value="Print" /> &nbsp;&nbsp;


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



