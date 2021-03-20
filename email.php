<?php 
include "./connection.php";
if(!isset($_POST['submit'])) {
   header('Location: register'); 
} else {
    $name = $_POST['fname'] . " " . $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $herbalife = $_POST['herbalife'];
    $subject = "Imperial Wellness enquiry";

    $sql = "insert into data(name, email, phone, country, state, herbalife) value('$name', '$email', '$phone', '$country', '$state', '$herbalife')";
    if(mysqli_query($conn, $sql)) {
        header('Location: submit');
    } else {
        echo "not submitted";
    }
}
?>