<?php
if (isset($_POST['name']) || isset($_POST['email']) || isset($_POST['phone']) || isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];
    $message = $_POST['message'];
    if (!empty($name) && !empty($email) && !empty($message)) {
        $from = 'From: ' . $name . '<' . $email . '> \r\n Reply-to: ' . $email;
        $subject = "Contact Form Enquiry";
        $message = " Name : ".$name."\n Email : ".$email."\n Contact No. : ".$mobile."\n Message : ".$message;
        if (mail("chy.bharat@gmail.com", $subject, $message, $from)) {
            echo 'success';
        } else {
            echo 'failed';
        }
    }
}
?>