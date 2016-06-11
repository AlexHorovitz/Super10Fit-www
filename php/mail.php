<?php
$name = $_POST['name'];
$email_id = $_POST['email'];   // data from jQuery.post
$phone = $_POST['phone'];   
$content = $_POST['content'];

if(isset($_POST['email'])){
$subject = "Contact Submission";
$to = 'alex@alexhorovitz.com';    //Change this to your mail address
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message = $content." FROM:".$name.' ( Email ID: '.$email_id .' Phone: '.$phone.' )';
if ( mail( $to, $subject, $message ) ) {
     echo 'Message Sent';
}
} else{
echo 'Unable to send';
}
?>