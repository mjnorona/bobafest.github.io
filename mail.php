<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $formcontent = "From: $name \n Message: $message";
    $recipient = "cindy.kathleen.wang@gmail.com";
    $subject = "Boba Festival Contact Form";
    $mailheader = "From: $email \r\n";

    mail ($recipient, $subject, $formcontent, $mailiheader) or die ("Sorry, please try again!");
    echo "Thank You!";
?>