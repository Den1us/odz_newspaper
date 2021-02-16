<?php
session_start();
require_once 'connection.php';

$login = htmlspecialchars($_POST['logreg']);

$password = htmlspecialchars($_POST['passwordreg']);

$password_rep = htmlspecialchars($_POST['repeatpassword']);

if ($password === $password_rep) {
    $password = md5($password);
    mysqli_query($link, "INSERT INTO `users`(login, password) VALUES('$login', '$password')");
    $_SESSION['message'] = 'Success';
    header("Location: ../auth.php");
} else {
    $_SESSION['message'] = 'Password mismatch';
    header("Location: ../reg.php");
}
?>