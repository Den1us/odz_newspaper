<?php
session_start();

if ($_SESSION['user']) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    $title = "Auth";
    require_once "blocks/head.php";
    require 'connection.php';
    ?>
    <script src="scriptfeedback.js"></script>

</head>

<body>
<!------------header-->
<?php require_once "blocks/header.php"?>

<div id="wrapper">
    <div id="leftcol">
        <form id="authform" action="/functions/authdb.php" method="post">
            <input type="text" id="login" name="login" placeholder="Enter your login">
            <input type="password" id="password" name="password" placeholder="Enter your password">

            <button>Log in</button>
            <div id="messageshow">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
            <p>
                Don't have an account? <a href="reg.php">Registration</a>
            </p>
        </form>
    </div>
    <!-----------rightcol-->
    <?php require_once "blocks/rightcol.php"?>
</div>
<!------------footer-->
<?php require_once "blocks/footer.php"?>
</body>
</html>