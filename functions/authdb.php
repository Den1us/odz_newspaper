<?php
    session_start();
    require_once 'connection.php';

    $login = htmlspecialchars($_POST['login']);

    $password = md5($_POST['password']);

    $check_user = mysqli_query($link, "SELECT * from `users` where `login` = '$login' and  `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login']
        ];
        $_SESSION['message'] = 'Success';
        header("Location: ../auth.php");
    } else {
        $_SESSION['message'] = 'Wrong login or password';
        header("Location: ../auth.php");
    }
    ?>