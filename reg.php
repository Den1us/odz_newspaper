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
    $title = "Reg";
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
        <form id="authform" action="functions/regdb.php" method="post">
            <input type="text" id="logreg" name="logreg" placeholder="Enter your login">
            <input type="password" id="passwordreg" name="passwordreg" placeholder="Enter your password">
            <input type="password" id="repeatpassword" name="repeatpassword" placeholder="Password confirmation">
            <button>Reg</button>
            <div id="messageshow">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
            <p>
                Do you have an account? <a href="auth.php">Log in</a>
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