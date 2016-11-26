<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 1</title>
        <link rel="stylesheet" href="../css/master.css" media="screen" title="no title">
    </head>
    <body>
        <header>
            Задача 1:<br>
            <span class="proviso">Даден е масива $colors = [‘white’, ‘green’, ‘blue’]; <br>
                Напишете програма, която разпечатва следното:<br>
                <ul type="none">
                    <li>green</li>
                    <li>blue</li>
                    <li>white</li>
                </ul>
            </span>
        </header>
        <div class="output">
            <ul type="none">
            <?php
                $colors = ['white', 'green', 'blue'];
                foreach ($colors as $color) {
                    echo "<li>$color</li>";
                }
             ?>
            </ul>
        </div>
    </body>
</html>
