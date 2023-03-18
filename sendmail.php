<?php
//require("class.PHPMailer.php");
require_once('hexmail/class.phpmailer.php');
$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.zoho.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPKeepAlive = true;                  // SMTP connection will not close after each email sent
$mail->Port          = 465;                    // set the SMTP port for the GMAIL server
$mail->Username = "info@rtrs.in";  // SMTP username
$mail->Password = "rtrs"; // SMTP password
$mail->SetFrom('info@rtrs.in', 'rtrs');

//$mail->From = "contact@karapuzharesort.com";
//$mail->FromName = "Karapuzha Resort";
//$mail->AddAddress("info@karapuzharesort.com", "Karapuzha Resort");
$mail->AddAddress("info@rtrs.in");                  // name is optional
//$mail->AddReplyTo("info@example.com", "Information");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$name= $_POST['txtName'];
$email= $_POST['txtEmail'];
$contact= $_POST['txtContactNo'];
$place= $_POST['txtSubject'];
$message= $_POST['txtDescription'];

$sendMsg = "<h2>Contact Form Submission</h2><br/>Name:".$name."<br/>Email:".$email."<br/>Contact Number:".$contact."<br/>Place:".$place."<br/>Message:".$message;
$sendMsg2 = "Contact Form Submission### Name:".$name."###Email:".$email."###Contact Number:".$contact."###Place:".$place."###Message:".$message;
$mail->Subject = "Contact Enquiry From clippys caravan tourism";
$mail->Body    = $sendMsg;
$mail->AltBody = $sendMsg2;

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "<h3>Message has been sent</h3>";
?>

<script>setTimeout(function(){window.location.href="/"},3000);</script>