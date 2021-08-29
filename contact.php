<?php

if($_POST["submit"]) {
    $recipient="18it29@kcgcollege.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["rpriyapadma2000@gmail.com"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
