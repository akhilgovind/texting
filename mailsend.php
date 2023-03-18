<?php
$name= $_POST['txtName'];
$email= $_POST['txtEmail'];
$contact= $_POST['txtContactNo'];
$place= $_POST['txtSubject'];
$message= $_POST['txtDescription'];

$sendMsg = "<h2>Contact Form Submission</h2><br/>Name:".$name."<br/>Email:".$email."<br/>Contact Number:".$contact."<br/>Place:".$place."<br/>Message:".$message;

$from = "info@rtrs.in";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 


// Sending email
if(mail("info@rtrs.in","My subject",$sendMsg,$headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}


?>

<script>setTimeout(function(){window.location.href="/"},3000);</script>

