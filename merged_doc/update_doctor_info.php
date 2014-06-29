<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>


    <title>Doctors Registration</title>
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
    <link rel="stylesheet" href="css/bootstrap.css" >
	<link id="theme" rel="stylesheet" type="text/css" href="css/style.css" title="theme" />
  </head>
  <body>
    <div id="wrapper">
      <div id="bg">
        <div id="header"></div>
        <div id="page">
          <div id="container">
            <!-- banner -->
            <div id="banner"></div>
            <!-- end banner -->
            <!-- horizontal navigation -->
            <div id="nav1">

            </div>
            <!-- end horizontal navigation -->
            
			
<div class="well" >
<form action="new_doctor_page.php">
    <input type="submit"class="btn btn-success" value="Back">
</form>
</div>

			
			<!--  content -->
           <div id="content">
              <div id="center"> <br>
                <div id="welcome">
                  <h3>Update Information</h3>
<?php
session_start();
$doc_id=$_SESSION['id'];
require"connect.php";
$avail=mysql_query("SELECT * FROM doctor_record where emp_id='$doc_id' ");
$values=mysql_fetch_array($avail);
?>
				  <!-- Start of FORM -->
<form name="myForm" method="post" action="doctor_info_backend.php"enctype="multipart/form-data">
<br>			
email <br>
<input type="text" name="email" value="<?php echo $values[4]; ?>"> <br>
Highest Degree <br>
<input type="text" name="degree" value="<?php echo $values[5];?>"> <br>
LandLine No (Area Code)<br>
<input type="text" name="landline" value="<?php echo $values[6];?>"> <br>
Mobile Number<br>
<input type="text" name="mobile" value="<?php echo $values[7];?>"> <br>

<h2> Professional Details</h2><br>
Type of Treatment<br>
<textarea name="treatment" rows="8" value="<?php echo $values[10];?>" cols="75"> </textarea> <br>
<br>

Education Details<br>
<textarea name="education" rows="8" cols="75"value="<?php echo $values[11];?>"> </textarea> <br>
<br>

<h1> Schedule Details</h1><br>

<!-- this code is a replacement for below ones-->
<b>Monday</b><br><br>
Availability <br>
<input type="radio" name="mon_avail" value="available" onclick="setOptions('available')"> Available<br>
<input type="radio" name="mon_avail" value="unavailable" onclick="setOptions('unavailable')"> Unavailable<br>
<br>
<?php
echo"from <select name='mon_from' >";
for($i=10;$i<19;$i++){ 
echo"<option value=$i>$i</option>";
}
echo"</select>";

echo"-to <select name='mon_to' > ";
for($i=10;$i<19;$i++){ 
echo"<option value='$i'>$i</option>";
}
echo"</select>";
echo"<br><br>";
?>



<b>Tuesday</b><br><br>
Availability <br>
<input type="radio" name="tue_avail" value="available">Available<br>
<input type="radio" name="tue_avail" value="unavailable">Unavailable<br>
<br>
from <select name="tue_from" >   <option value="10">10</option><option value="11">11 </option> <option value="12">12</option> <option value="13">13 </option> <option value="14"> 14</option> <option value="15">15 </option> <option value="16">16 </option> <option value="17">17 </option> <option value="18"> 18</option> </select>
-to <select name="tue_to" >   <option value="10">10</option><option value="11">11 </option> <option value="12">12</option> <option value="13">13 </option> <option value="14"> 14</option> <option value="15">15 </option> <option value="16">16 </option> <option value="17">17 </option> <option value="18"> 18</option> </select>
<br><br>

<b>Wednesday</b><br><br>
Availability <br>
<input type="radio" name="wed_avail" value="available">Available<br>
<input type="radio" name="wed_avail" value="unavailable">Unavailable<br>
<br>
from <select name="wed_from" >   <option value="10">10</option><option value="11">11 </option> <option value="12">12</option> <option value="13">13 </option> <option value="14"> 14</option> <option value="15">15 </option> <option value="16">16 </option> <option value="17">17 </option> <option value="18"> 18</option> </select>
-to <select name="wed_to" >   <option value="10">10</option><option value="11">11 </option> <option value="12">12</option> <option value="13">13 </option> <option value="14"> 14</option> <option value="15">15 </option> <option value="16">16 </option> <option value="17">17 </option> <option value="18"> 18</option> </select>
<br><br>

<b>Thursday</b><br><br>
Availability <br>
<input type="radio" name="thur_avail" value="available">Available<br>
<input type="radio" name="thur_avail" value="unavailable">Unavailable<br>
<br>
from <select name="thur_from" >   <option value="10">10</option><option value="11">11 </option> <option value="12">12</option> <option value="13">13 </option> <option value="14"> 14</option> <option value="15">15 </option> <option value="16">16 </option> <option value="17">17 </option> <option value="18"> 18</option> </select>
-to <select name="thur_to" >   <option value="10">10</option><option value="11">11 </option> <option value="12">12</option> <option value="13">13 </option> <option value="14"> 14</option> <option value="15">15 </option> <option value="16">16 </option> <option value="17">17 </option> <option value="18"> 18</option> </select>
<br><br>

<b>Friday</b><br><br>
Availability <br>
<input type="radio" name="fri_avail" value="available">Available<br>
<input type="radio" name="fri_avail" value="unavailable">Unavailable<br>
<br>
from <select name="fri_from" >   <option value="10">10</option><option value="11">11 </option> <option value="12">12</option> <option value="13">13 </option> <option value="14"> 14</option> <option value="15">15 </option> <option value="16">16 </option> <option value="17">17 </option> <option value="18"> 18</option> </select>
-to <select name="fri_to" >   <option value="10">10</option><option value="11">11 </option> <option value="12">12</option> <option value="13">13 </option> <option value="14"> 14</option> <option value="15">15 </option> <option value="16">16 </option> <option value="17">17 </option> <option value="18"> 18</option> </select>
<br><br>

<b>Saturday</b><br><br>
Availability <br>
<input type="radio" name="sat_avail" value="available">Available<br>
<input type="radio" name="sat_avail" value="unavailable">Unavailable<br>
<br>
from <select name="sat_from" >   <option value="10">10</option><option value="11">11 </option> <option value="12">12</option> <option value="13">13 </option> <option value="14"> 14</option> <option value="15">15 </option> <option value="16">16 </option> <option value="17">17 </option> <option value="18"> 18</option> </select>
-to <select name="sat_to" >   <option value="10">10</option><option value="11">11 </option> <option value="12">12</option> <option value="13">13 </option> <option value="14"> 14</option> <option value="15">15 </option> <option value="16">16 </option> <option value="17">17 </option> <option value="18"> 18</option> </select>
<br><br>

<b>Sunday</b><br><br>
Availability <br>
<input type="radio" name="sun_avail" value="available">Available<br>
<input type="radio" name="sun_avail" value="unavailable">Unavailable<br>
<br>
from <select name="sun_from" >   <option value="10">10</option><option value="11">11 </option> <option value="12">12</option> <option value="13">13 </option> <option value="14"> 14</option> <option value="15">15 </option> <option value="16">16 </option> <option value="17">17 </option> <option value="18"> 18</option> </select>
-to <select name="sun_to" >   <option value="10">10</option><option value="11">11 </option> <option value="12">12</option> <option value="13">13 </option> <option value="14"> 14</option> <option value="15">15 </option> <option value="16">16 </option> <option value="17">17 </option> <option value="18"> 18</option> </select>
<br><br>


 <p>
    <input name="submit" type="submit" class="btn btn-success" id="submit" formaction="update_doc_backend.php" formmethod="POST" value="Update" />
    <br>
    <br>
  </p>

</form>
<!-- End of FORM -->


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
IIT MANDI-HOSPITAL MANAGEMENT SYSTEM

            </p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
