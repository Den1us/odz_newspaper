<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    require_once "functions/functions.php";
    $title = "News";
    require_once "blocks/head.php";
    $news = getnews(3, $id);
    ?>
</head>

<body>
<!------------header-->
    <?php require_once "blocks/header.php"?>

    <div id="wrapper">
        <div id="leftcol">

            <?php
                for ($i = 0; $i < count($news); $i++) {
                    if ($i == 0)
                        echo "<div id=\"bigarticle\">";
                    else echo "<div class=\"article\">";
                    echo '<img src="img/'.$news[$i]["id"].'.jpg" alt="">
                <h2>'.$news[$i]["title"].'</h2>
                <p>'.$news[$i]["intro_text"].'</p>
                <a href="/article1.php?id='.$news[$i]["id"].'">
                    <div class="more">Next</div>
                </a>
            </div>';
                    if ($i == 0)
                        echo "<div class=\"clear\"><br></div>";
                }
            ?>
        </div>
<!-----------rightcol-->
        <?php require_once "blocks/rightcol.php"?>
    </div>
<!------------footer-->
    <?php require_once "blocks/footer.php"?>
</body>
</html>