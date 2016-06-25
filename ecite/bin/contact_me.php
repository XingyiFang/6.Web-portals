<?php
require '../../mail/PHPMailer/PHPMailerAutoload.php';
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$mail = new PHPMailer;

$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('', 'noreply');
//$mail->addAddress('hqin1021@live.com', 'Han Qin');     // Add a recipient
$mail->addAddress($email_address);               // Name is optional
//$mail->addReplyTo('hqin0405@gmail.com', 'Information');
$mail->addCC('');
$mail->addBCC('');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "ECITE Contact Form:  $name";
$mail->Body    = "We have received your message.<br/>\n\n"."Here are the details:<br/>\n\nName: $name<br/>\n\nPhone: $phone<br/>\n\nEmail: $email_address<br/>\n\nMessage:\n$message";
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

	

	
// create email body and send it	
//$to = 'hqin1021@live.com'; // PUT YOUR EMAIL ADDRESS HERE
//$email_subject = "Modern Business Contact Form:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
//$email_body = "You have received a new message from your website's contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nMessage:\n$message";
//$headers = "From: noreply@your-domain.com\n";
//$headers .= "Reply-To: $email_address";	
//mail($to,$email_subject,$email_body);
//return true;			
?>
