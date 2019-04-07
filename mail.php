<?php
session_start();
$name = "";
$email  = "";
$phone  = "";
$website  = "";
$type = "";
$message = "";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$type = $_POST['type'];
$message = $_POST['message'];
if (empty($name)) { echo "name is required"; }
if (empty($type)) { echo "type is required"; }
if (empty($phone)) { echo "Phone No  is required";}
if (empty($email)) { echo "Email is required"; }
if (empty($website)) { echo "website is required"; }
if (empty($message)) { echo "message is required"; }

$formcontent=" From: $name \n Phone: $phone \n Website: $website \n Type: $type \n Message: $message";
$recipient = "gharelu@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
if(!empty($hllo)){
header('location:con.php');
}
?>
