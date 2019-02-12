<?php

if($_POST["submit"]) {
    $recipient="candice.marie.mcdermott@gmail.com";
    $subject="Contact form submission.";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! I'll get back to you shortly.</p>";
}
