<?php
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    if ($name == '' || $email == '' || $subject == '' || $message == '') {
        echo 'Fill in all the fields';
        exit;
    }
    // Отправка
    $subject = "=?utf-8B?".base64_encode($subject)."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
    if(mail("dan.thegame78@gmail.com", $subject, $message, $headers))
        echo "Message sent";
    else
        echo "Message not sent";
?>