<?php
$date = filemtime('index.php');

// echo 'Current PHP version: ' . phpversion() . ' ;<br>'
// . 'Last modified: ' . date("d / F / Y H:i:s.", $date);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 7</title>
    </head>
    <body>
        <style media="screen">
            .medium-font-size {
                font-size: 1.4em;
            }
        </style>
        <div class="medium-font-size">
            <em><strong>Current PHP version:</strong></em>
            <?php echo phpversion() . ';'?>
        </div>
        <div class="medium-font-size">
            <em><strong>Last modified:</strong></em>
            <?php echo date("d / F / Y H:i:s;", $date); ?>
        </div>

    </body>
</html>
