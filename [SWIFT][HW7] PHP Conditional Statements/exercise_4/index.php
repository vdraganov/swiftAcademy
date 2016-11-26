
<?php
if (!empty($_GET)) {
    $numA = $_GET['numberA'];
    $numB = $_GET['numberB'];
    $numC = $_GET['numberC'];

    $stringHolder = 'Positive (+)';

    if ($numA * $numB * $numC < 0) {
        $stringHolder = 'Negative (-)';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 4</title>
        <link rel="stylesheet" href="../css/master.css" media="screen" title="no title">
    </head>
    <body>
        <header>
            <p id="header" class="proviso">
                Задача 4:<br />
                Напишете програма, която извежда знака (+ или -) като резултат от умножението на три естествени числа.<br/>
                Не пресмятайте резултата!
            </p>
        </header>

        <form class="" action="" method="get">
            <label for="card">Enter 3 Numebrs: </label>
            <input type="text" name="numberA" value="" > *
            <input type="text" name="numberB" value="" > *
            <input type="text" name="numberC" value="" > =

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($stringHolder)): ?>
            <div class="output">
                <strong>What's the sign of multiplication?</strong><br/>
                <em><?php echo $stringHolder ?><em>
            </div>
        <?php endif ?>
    </body>
</html>
