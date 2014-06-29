<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Sun, 01 Dec 2013 06:24:28 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>lowStockTable</title>
        <link rel="stylesheet" type="text/css" href="css/lowStockTablestyle.css" />
 </head>
 <body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>DrugTable</title>
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
      <li><a href="drugTable.php">Import List</a></li>
                
      <li><a href="damagedTable.php" shape="rect">Damaged Products</a></li>
      
      <li id="current" style="border:none"><a href="lowStockTable.php" shape="rect">Low Stock Products</a></li>
      <li><a href="drug_update.html" shape="rect">Update Product</a></li>
                
      </ul> 
      </div> 
      <div align="left">
              <!-- end horizontal navigation -->  
              <!--  content -->  
              
              
            </div>
            <div id="content"> 
              <div id="center"> 
                <div id="welcome"> 
                  <h3 align="left">Drug Store :</h3>  
                </div>
                 <h4 align="center">&nbsp; </h4>
                <h4 align="center">Low Stock </h4> 
              </div>
       <div id="content">
        <div id="center">
            <div class="CSSTableGenerator" >
			  
  
<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "btp";
$con = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("could not connect to database");

mysql_select_db($mysql_database, $con) or die("Could not select database");

$lowstock_sql = "SELECT prodName,prodCode,batchId,currentStock,shelf,manufacture,genericName,expDate from prod_info ";

$result = mysql_query($lowstock_sql,$con);

echo"<table width='311' height='138'>";
echo "<tr class='lowstock'>
      <td width='50'>
         Product Name
      </td>
      <td width='46' >
         Product Code
      </td>
      <td width='65'>
         Batch Id
      </td>
      <td width='41'>
         Current Stock
      </td>
	  <td width='41'>
         Shelf
      </td>
	  <td width='41'>
         Manufacturer
      </td>
	  <td width='41'>
         Generic Name
      </td>
	  <td width='41'>
         Expiry Date
      </td>
      </tr> ";
$threshold = 20;
 
while($row= mysql_fetch_row($result))
{
  //echo"$row[1]";
  if ($row[3]<=($threshold))
 {
        
		echo "<tr>";
	
		for($i=0; $i<8; $i++)
		{
		echo "<td class='lowstock'><i>".$row[$i]."</i></td>";
		}
		echo "</tr>";
 }
} 
echo "</table>"	;  
mysql_close($con);	  
?>
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
             
        IIT MANDI Drug Store Department           </p> 
          </div> 
        </div> 
      </div> 
    </div> 
  </body>
</html>

  </body>
</html>
