<html>
<head>
 <title>try</title>
</head>
<?php
session_start();
$id=$_POST['book_check_box'];

$_SESSION['id']=$id;
?>
<frameset rows="40%,60%">
      <frame src="schedule_frame.php" />
      <frame src="bottom.php" />
      <noframes>
      <body>
      Your browser does not support frames.
      </body>
      </noframes>
  </frameset> 
  
  
     
         
        	   
</html>