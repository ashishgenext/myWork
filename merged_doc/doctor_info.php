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
            <!--  content -->
           <div id="content">
              <div id="center"> <br>
                <div id="welcome">
                  <h3>Doctors Registration/Update</h3>
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
Name <br>
<input type="text" name="name" value=""> <br>
Employee ID<br>
<input type="text" name="emp_id" value=""> <br>
Password<br>
<input type="password" name="password" value=""> <br>
<p>
 Please Upload a Photo of the Member in gif or jpeg format. The file name should be named after the Members name. If the same file name is uploaded twice it will be overwritten! Maxium size of File is 35kb.
</p>
            <p>
              Photo:
            </p>
            <input type="hidden" name="size" value="350000">
            <input type="file" name="photo">
<br><br>			
email <br>
<input type="text" name="email" value=""> <br>
Highest Degree <br>
<input type="text" name="degree" value=""> <br>
LandLine No (Area Code)<br>
<input type="text" name="landline" value=""> <br>
Mobile Number<br>
<input type="text" name="mobile" value=""> <br>

<h1> Professional Details</h1><br>
Doctors Registration Number<br>
<input type="text" name="registration" value=""> <br>
<br>
Speciality<br>
<select name="speciality" ><option value="Acupuncturist">Acupuncturist</option> <option value="Allergist">Allergist</option> <option value="Anesthesiologist">Anesthesiologist</option> <option value="AyurvedicMedicine">Ayurvedic Medicine</option> <option value="Cardiologist">Cardiologist</option> <option value="CardiovascularDiseaseSpecialist">Cardiovascular Disease Specialist</option> <option value="CardiovascularSurgeon">Cardiovascular Surgeon</option> <option value="Chiropractic">Chiropractic</option> <option value="ClinicalPsychologist">Clinical Psychologist</option> <option value="CriticalCareMedicineSpecialist">Critical Care Medicine Specialist</option> <option value="DentalHygienists">Dental Hygienists&nbsp;</option> <option value="Dentist">Dentist&nbsp;</option> <option value="Dermatologist">Dermatologist</option> <option value="DieticianNutritionist">Dietician-Nutritionist</option> <option value="ENT">Ear-Nose-Throat&nbsp;</option> <option value="Endocrinologist">Endocrinologist</option> <option value="Endodontist">Endodontist</option> <option value="Gastroenterologist">Gastroenterologist</option> <option value="GeneralPractitioner">General Practitioner&nbsp;</option> <option value="GeneralSurgeon">General Surgeon</option> <option value="Hematologist">Hematologist</option> <option value="Homeopathic">Homeopathic</option> <option value="InfectiousDiseaseSpecialist">Infectious Disease Specialist&nbsp;</option> <option value="InternalMedicineSpecialist">Internal Medicine Specialist</option> <option value="InterventionalCardiologist">Interventional Cardiologist&nbsp;</option> <option value="LaparoscopicSurgeon">Laparoscopic Surgeon</option> <option value="Microbiologist">Microbiologist&nbsp;</option> <option value="Midwifery">Midwifery</option> <option value="NaturopathicPhysician">Naturopathic Physician</option> <option value="Neonatologist">Neonatologist</option> <option value="Nephrologist">Nephrologist</option> <option value="NeurologicalSurgeon">Neurological Surgeon</option> <option value="Neurologist">Neurologist</option> <option value="ObstetricianAndGynecologist">Obstetrician And Gynecologist</option> <option value="OcularProsthetics">Ocular Prosthetics</option> <option value="Ophthalmologist">Ophthalmologist</option> <option value="Optometrist">Optometrist</option> <option value="OralMaxillofacialSurgeon">Oral Maxillofacial Surgeon</option> <option value="OralSurgeon">Oral Surgeon</option> <option value="Orthodontist">Orthodontist&nbsp;</option> <option value="Orthopedist">Orthopedist</option> <option value="Osteopathic">Osteopathic</option> <option value="PediatricDentist">Pediatric Dentist</option> <option value="PediatricSurgeon">Pediatric Surgeon</option> <option value="Pediatrician">Pediatrician</option> <option value="Periodontist">Periodontist&nbsp;</option> <option value="PhysicalMedicineAndRehabSpecialist">Physical Medicine And Rehab Specialist</option> <option value="Physiotherapist">Physiotherapist</option> <option value="Plastic Surgeon">Plastic Surgeon&nbsp;</option> <option value="Prosthodontist">Prosthodontist</option> <option value="Psychiatrist">Psychiatrist</option> <option value="Psychologist">Psychologist&nbsp;</option> <option value="Pulmonologist">Pulmonologist&nbsp;</option> <option value="Radiologist">Radiologist&nbsp;</option> <option value="ReproductiveEndocrinologist">Reproductive Endocrinologist&nbsp;</option> <option value="InfertilitySpecialist">Infertility Specialist</option> <option value="Rheumatologist">Rheumatologist</option> <option value="SexualHealthPhysician">Sexual Health Physician</option> <option value="SportsMedicineSpecialist">Sports Medicine Specialist</option> <option value="Surgical">Surgical&nbsp;</option> <option value="ThoracicSurgeon">Thoracic Surgeon</option> <option value="Urologist">Urologist</option> <option value="VascularSurgeon">Vascular Surgeon</option> <option value="OTHER">OTHER</option>
</select> <br>
<br>
Type of Treatment<br>
<textarea name="treatment" rows="8" cols="75"> </textarea> <br>
<br>

Education Details<br>
<textarea name="education" rows="8" cols="75"> </textarea> <br>
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
    <input name="submit" type="submit" id="submit" formaction="doctor_info_backend.php" formmethod="POST" value="register" />
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
