
<?php
if (!empty($_GET)) {
    $numA = $_GET['numberA'];
    $numB = $_GET['numberB'];
    $numC = $_GET['numberC'];
    $numD = $_GET['numberD'];
    $numE = $_GET['numberE'];

    $stringHolder = max($numA, $numB, $numC, $numD, $numE);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercise 6</title>
        <link rel="stylesheet" href="../css/master.css" media="screen" title="no title">
    </head>
    <body>
        <header>
            Задача 5-6:<br />
            <span class="proviso">Напишете програма, която намира най-голямото от 5 числа.</span>
        </header>

        <form class="" action="" method="get">
            <label for="card">Enter 3 or 5 numbers: </label>
            <input type="text" name="numberA" value="" required />
            <input type="text" name="numberB" value="" required />
            <input type="text" name="numberC" value="" required />
            <input type="text" name="numberD" value="" />
            <input type="text" name="numberE" value="" />

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($stringHolder)): ?>
        <div class="output">
            <strong>Biggest number of the 5 entered numbers is... </strong><em><?php echo $stringHolder ?><em>
            </div>
        <?php endif ?>
    </body>
</html>
