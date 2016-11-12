<?php
    $urlPath = 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

    $urlPath = substr_replace($urlPath, '', strpos($urlPath, '?'), strlen($urlPath) );
    $urlPath = str_replace('%20', ' ', $urlPath);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 8</title>
    </head>
    <style media="screen">
        .output {
            padding: 10px;
            margin: 10px;
            background-color: aquamarine;
        }
    </style>
    <body>
        <div class="">
            Write a PHP script, which prints the full URL adress of the current file.
        </div>
        <div class="output">
            <pre><?php echo $urlPath ?></pre>
        </div>
    </body>
</html>
