<?php
$title = "This is my home page";
$description = "This is my description";
$x = 1;
?>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>
        <h1>
            <?php
            echo $title, " and", " something", " else";
            ?>
        </h1>
        <h2>
            <?php print $description; ?>
        </h2>
        <p>
            <?php
            // if ($x == 1) {
            //     echo "YES";
            // } else {
            //     echo "NO";
            // }
            ($x == 1) ? print "YES" : print "NO";
            ?>
        </p>
    </body>
</html>
