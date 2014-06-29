<?php


$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "email_db";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

$date_t=date('Y-m-d',strtotime("1 day"));
$query = "SELECT email_address FROM emailqueue WHERE appointment_date='$date_t'";
//mysql_query($query) or die(mysql_error());

$result = mysql_query($query);
while($row = mysql_fetch_row($result))
{
	
	$to = $row[0];
	// $success = mail($to, $subject, $message, $headers);
	date_default_timezone_set('Etc/UTC');

	require_once 'PHPMailer/PHPMailerAutoload.php';

	//Create a new PHPMailer instance
	$mail = new PHPMailer();

	//Tell PHPMailer to use SMTP
	$mail->isSMTP();

	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 2;

	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';

	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';

	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 587;

	//Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPSecure = 'tls';

	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;

	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "mandi.healthcare@gmail.com";

	//Password to use for SMTP authentication
	$mail->Password = "iitmandibtp";

	//Set who the message is to be sent from
	$mail->setFrom('mandi.healthcare@gmail.com', 'IIT Healthcare');

	//Set an alternative reply-to address
	$mail->addReplyTo('replyto@example.com', 'First Last');

	//Set who the message is to be sent to
	$mail->addAddress("$to" , 'John Doe');

	//Set the subject line
	$mail->Subject = 'Reimbursment Status';

	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$message = "
		<html>
			<body>
				<p>Hi message.<p>Ashish
				 with the following comments: do come!
			</body>
		</html>
	";
	$mail->msgHTML($message, dirname(__FILE__));

	//Replace the plain text body with one created manually
	$mail->AltBody = 'AltBody';

	//Attach an image file
	// $mail->addAttachment('images/phpmailer_mini.png');

	//send the message, check for errors
	if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	    echo "Message sent!";
	}

	//header("location: ../admin.php?id=".$info['employee_id']);
} 

mysql_close();

?>