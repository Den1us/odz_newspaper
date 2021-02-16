<!DOCTYPE html>
<html>
<head>
    <?php
    require_once "functions/functions.php";
    $news = getnews(1, $_GET["id"]);
    $title = $news["title"];
    require_once "blocks/head.php";
    ?>
</head>

<body>
<!------------header-->
<?php require_once "blocks/header.php"?>

<div id="wrapper">
    <div id="leftcol">

        <?php
            echo '<div id="bigarticle"><img src="img/'.$news["id"].'.jpg" alt="">
                <h2>'.$news["title"].'</h2>
                <p>'.$news["full_text"].'</p>
            </div>';
        ?>
    </div>
    <!-----------rightcol-->
    <?php require_once "blocks/rightcol.php"?>
</div>
<!------------footer-->
<?php require_once "blocks/footer.php"?>
</body>
</html>