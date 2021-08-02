<?php

ob_start();

if (isset($_POST['Submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    $myMail = "christianvaldez608@gmail.com";
    $header = "From " . $email;
    $message2 = "You have received a message from " . $name . ". \n\n" . $message;

    mail($myMail, $subject, $message2, $header);

    header('Location:Sent.php?mailSent');
}

ob_end_flush();
