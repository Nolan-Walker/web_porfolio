<?php
ini_set( 'display_errors', 1);
error_reporting( E_ALL );

//get data from form  
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

if(empty($name)||empty($email))
{
    echo "Name and email are mandatory!";
    exit;
}

$to = "nolancaissie.ece@gmail.com";
$txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\nMessage =" . $message;
$headers = "From: noreply@nolans-space.tech" . "\r\n";

mail($to,$subject,$txt,$headers);

//redirect
header("Location:post.html");
?>