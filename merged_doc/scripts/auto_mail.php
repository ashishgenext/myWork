<?php
include 'phpConnect.php';


$date_t=date('Y-m-d',strtotime("1 day"));
$value=mysql_query("SELECT email_address FROM emailqueue WHERE appointment_date='$date_t'");
//$table=mysql_fetch_array($value);

if ($table=mysql_fetch_array($value))
{
	//$query = "SELECT * from reimbursment where request_id='$request_id'";
	//$data = mysql_query($query) or die(mysql_error());
	//$info = mysql_fetch_array( $data );
	$to = $table['email_id'];
	// $success = mail($to, $subject, $message, $headers);
	date_default_timezone_set('Etc/UTC');

	require 'PHPMailer/PHPMailerAutoload.php';

	//Create a new PHPMailer instance
	$mail = new PHPMailer();

	//Tell PHPMailer to use SMTP
	$mail->isSMTP();

	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 1;

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
				<p>your reimbursment application have been processed, it have been <p>$status
				 with the following comments $comment
			</body>
		</html>
	";
	$mail->msgHTML($message, dirname(__FILE__));

	//Replace the plain text body with one created manually
	$mail->AltBody = 'Your reimbusment have been which has reimbursment id:';

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
else 
{
	die(mysql_error());
}

mysql_close();

?>