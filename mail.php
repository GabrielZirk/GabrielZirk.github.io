<?php $name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];
$formcontent="From: $name \n Message: $text";
$recipient = "gabriel.zirkovits@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>