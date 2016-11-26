<?php
function calcMedian($x, $y) {
    return ($x + $y) / 2;
}

if (!empty($_POST)) {
    $x = $_POST['numberX'];
    $y = $_POST['numberY'];

    $result = calcMedian($x, $y);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 5</title>
        <link rel="stylesheet" href="../css/master.css" media="screen" title="no title">
    </head>
    <body>
        <header>
            Задача 5:<br>
            <span class="proviso">Напишете функция, която приема за аргументи две променливи и принтира като резултат: средно аритметичното на числата намиращи се между двете променливи:</span>
        </header>
        <form class="" action="" method="post">
            <label for="numberX">x: </label>
            <input type="number" name="numberX" value="" required />
            <label for="numberY">y: </label>
            <input type="number" name="numberY" value="" required />

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($result)): ?>
            <div class="output">
                The median of the numbers is: <?php echo $result; ?>
            </div>
        <?php endif ?>
    </body>
</html>
