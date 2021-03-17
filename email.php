<?php 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$state = $_POST['state'];
$herbalife = $_POST['herbalife'];
$subject = "Imperial Wellness enquiry";

$sender_email = "info@imperialwellness.com";
$message = "Name - " . $fname . " " . $lname;
$message .= "\nEmail - " . $email;
$message .= "\nphone - " . $phone;
$message .= "\ncountry - " . $country;
$message .= "\nHerbalife - " . $herbalife;
if(mail($sender_email, $subject, $message)) {
    header('Location: submit');
} else {
    echo "message not sent!";
}

?>