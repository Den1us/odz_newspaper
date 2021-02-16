<!DOCTYPE html>
<html>
<head>
    <?php
    $title = "Feedback";
    require_once "blocks/head.php"
    ?>
    <script src="scriptfeedback.js"></script>

</head>

<body>
<!------------header-->
<?php require_once "blocks/header.php"?>

<div id="wrapper">
    <div id="leftcol">
        <input type="text" placeholder="Name" id="name" name="name"><br>
        <input type="text" placeholder="Email" id="email" name="email"><br>
        <input type="text" placeholder="Subject" id="subject" name="subject"><br>
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message"></textarea><br>
        <div id="messageshow"></div>
        <input type="button" name="done" id="done" value="Send">
    </div>
    <!-----------rightcol-->
    <?php require_once "blocks/rightcol.php"?>
</div>
<!------------footer-->
<?php require_once "blocks/footer.php"?>
</body>
</html>