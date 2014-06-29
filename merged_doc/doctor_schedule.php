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
                       <div id="banner"></div> <!-- banner -->  <!-- end banner -->  
            
			<!-- horizontal navigation -->  
            <div id="nav1"> 
              <ul>
                <li id="current" style="border:none">
                  <a href="#" shape="rect">Appointment Scheduler</a>
                </li>
              </ul> 
            </div>  
            <!-- end horizontal navigation -->
			
            <!--  content --> 
            <div id="content"> 
              <div id="center"> 
                <div id="welcome"> 
                  <h3>Doctors Appointment </h3> 
                  <div class="CSSfont" >
           <?php
                   $mysql_hostname = "localhost";
				   $mysql_user = "root";
				   $mysql_password = "";
				   $mysql_database = "btp";

                   $con = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");

                   mysql_select_db($mysql_database, $con) or die("Could not select database");
				   $monday_schedule="SELECT mon_from, mon_to FROM doctor_record WHERE registration LIKE '$reg_no'AND mon_avail LIKE 'available'
				   
				   
				  
				   
				   
				   
				   
	        ?>       
           
		   
		   
		   <input name="submit" type="submit" id="submit" formaction="booked.php" formmethod="POST" value="Post" />&nbsp;&nbsp;</p>


                 </form>
				  
				  
				  
				  
				  

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