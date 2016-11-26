<?php
if (!empty($_GET)) {
    $startPos = $_GET['startPos'];
    $endPos = $_GET['endPos'];
    $tempArr = [];


    for ($i = $startPos; $i <= $endPos; $i++) {
        array_push($tempArr, $i);
    }

    shuffle($tempArr);
    $result = join($tempArr, ', ');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 3</title>
        <link rel="stylesheet" href="../css/master.css" media="screen" title="no title">
    </head>
    <body>
        <header>
            Задача 5:<br>
            <span class="proviso">
                Напишете програма, която по даден обхват, генерира всички числа в обхвата по случайна подредба;
            </span>
        </header>
        <form class="" action="" method="get">
            <label for="startPos">Put in position: </label>
            <input type="number" name="startPos" value="" required/>
            <label for="endPos">Put in position: </label>
            <input type="number" name="endPos" value="" required />

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($result)): ?>
        <div class="output">
            The new Array: <?php echo '[' . $result . ']'; ?>
        </div>
    <?php endif ?>
    </body>
</html>
