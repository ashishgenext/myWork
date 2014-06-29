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






$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "btp";

//echo $user;
 $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

$avail=mysql_query("SELECT * FROM doctor_record where emp_id='$user' ");

//$values=mysql_fetch_array($avail);
/*if(mysql_num_rows($avail)==0)
{
 echo "No record find" ;

}*/
$values=mysql_fetch_array($avail);
$name=$values['name'];



  /* while($rows=mysql_fetch_array($query))
    {
    $x=$rows['patient_id'];
    $q=mysql_query("select record from patient_info where patient_id='$x'");
    $v=mysql_fetch_array($q);
    $result=$result .$v['record'].",";

    } 
*/



mysql_close($bd);


?>


<h3>Hello Admin !! </h3>

<br>
<form method="post" action="">

<b>Search & Delete patient </b> <br><br>
First Name <br>
  <input type="text" name="fname" value=""> <br>
Last Name <br>
  <input type="text" name="lname" value=""> <br>
Date of birth<br>
 <input type="text" name="dob" value=""> <br>
 employee ID<br>
 <input type="text" name="emp_id" value=""> <br>  
  Batch<br>
 <input type="text" name="batch" value=""> <br> 

 <input name="submit" type="submit" id="submit" formaction="student_list.php" formmethod="POST" value="Search" />
 
</form>










                </div>
              </div>
              
			  <div id="right">
                <div id="sidebar">
                 	
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