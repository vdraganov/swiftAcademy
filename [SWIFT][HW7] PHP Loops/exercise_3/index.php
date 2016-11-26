
<?php
if (!empty($_POST)) {
        $n = $_POST['nNumber'];
        $x = $_POST['xNumber'];

    $stringHolder = '';
    $sum = 1;

    function calculateFactorial($num)
    {
        $factorial = 1;
        do {
            $factorial *= $num;
            $num--;
        } while ($num > 0);

        return $factorial;
    }

    $factorial = calculateFactorial($n);

    for ($i=1; $i <= $n; $i++) {
        $nFactorial = calculateFactorial($i);
        $sum += $nFactorial / pow($x, $i);
    }
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
            Задача 3:<br>
            <span class="proviso">Напишете програма, която по подадени две целочислени числа, пресмята тяхната сума по формулата <em>(S = 1 + 1!/x + 2!/x2 + … + n!/x^n)</em>:</span>
        </header>
        <form class="" action="" method="post">
            <label for="nNumber">n: </label>
            <input type="number" name="nNumber" value="">
            <label for="xNumber">x: </label>
            <input type="number" name="xNumber" value="">

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($sum)): ?>
            <div class="output">
                The result of the equation('S = 1 + 1!/x + 2!/x^2 + … + n!/x^n') is:
                <span class="result">
                        <?php if (gettype($sum) == 'integer') { ?>
                            <?php echo $sum; ?>
                        <?php } else if (gettype($sum) == 'double') { ?>
                            <?php echo number_format($sum, 5, '.', ' '); ?>
                        <?php } else { ?>
                            <?php echo 'Some went wrong. Please try again later.'; ?>
                        <?php } ?>
                </span>
            </div>
        <?php endif ?>
    </body>
</html>
