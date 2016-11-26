
<?php
function getTheBiggerNumber($number1, $number2) {
    return ($number1 > $number2) ? $number1 : $number2;
}

if (!empty($_GET)) {
    $numA = $_GET['numberA'];
    $numB = $_GET['numberB'];

    $stringHolder = getTheBiggerNumber($numA, $numB);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 2</title>
        <link rel="stylesheet" href="../css/master.css" media="screen" title="no title">
    </head>
    <body>
        <header>
            Задача 2:<br>
            <span class="proviso">Напишете функция, която приема за параметър две числа и разпечатва по-голямото от тях;</span>
        </header>
        <form class="" action="" method="get">
            <label for="numberA">A: </label>
            <input type="text" name="numberA" value="" required />
            <label for="numberB">B: </label>
            <input type="text" name="numberB" value="" required />

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($stringHolder)): ?>
        <div class="output">
            <strong>Biggest number is... </strong><em><?php echo $stringHolder ?><em>
            </div>
        <?php endif ?>
    </body>
</html>
