<?php $name = $_POST['name'];
$email = $_POST['email'];

$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "kevin@kevincullen.me";
$subject = "Hi There";
$mailheader = "From: $email \r\n";
if(mail($recipient, $subject, $formcontent, $mailheader)) {
    header("Location: http://kevincullen.me/contact-success.html"); 
} else {
    header("Location: http://kevincullen.me/contact-failure.html");
}
?>












