<?php

$action = $_REQUEST["action"];

if($action == "email")
{
	$to = "shahbazshoukat09@gmail.com"; // this is your Email address
    $from = $_REQUEST['email']; // this is the sender's Email address
    $name=$_REQUEST["name"];
	$msg=$_REQUEST["msg"];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $msg;
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $msg;

    $headers = "From: " . $from;
    $headers2 = "From:" . $to;

    mail($to,$subject,$message,$headers);
	mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo json_encode("Mail Sent. Thank you " . $name . ", we will contact you shortly.");

}
else
{
	echo json_encode("Error");
}
?>