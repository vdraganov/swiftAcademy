
<?php
if (!empty($_POST)) {
        $n = $_POST['nNumber'];
        $k = $_POST['kNumber'];

    $stringHolder = '';
    $result = 1;

    function calculateFactorial($num)
    {
        $factorial = 1;
        do {
            $factorial *= $num;
            $num--;
        } while ($num > 0);

        return $factorial;
    }

    if (($n < 0) || ($n > 100))  {
        $stringHolder = 'Invalid input of \'n\'. \'n\' must be in the range [0-100]';
    } else if (($k < 0) || ($k > 100))  {
        $stringHolder = 'Invalid input of \'k\'. \'k\' must be in the range [0-100]';
    } else if ($k > $n)  {
        $stringHolder = 'Invalid input. \'k\' must NOT be bigger than \'n\'';
    } else {
        $nFactorial = calculateFactorial($n);
        $kFactorial = calculateFactorial($k);

        $result = $nFactorial/$kFactorial;
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
            Задача 4:<br>
            <span class="proviso">Напишете програма, която по подадени две числа да пресмята техния факториел и след това дели двете суми: <em>n! / k! (1 < k < n < 100)</em>:</span>
        </header>
        <form class="" action="" method="post">
            <label for="kNumber">k: </label>
            <input type="number" name="kNumber" value="">
            <label for="nNumber">n: </label>
            <input type="number" name="nNumber" value="">

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($result)): ?>
            <div class="output">
                The result of the equation('S = 1 + 1!/x + 2!/x^2 + … + n!/x^n') is:
                    <?php if (!empty($stringHolder)) { ?>
                        <?php echo '<br>' . $stringHolder; ?>
                    <?php } else if (gettype($result) == 'integer') { ?>
                        <?php echo $result; ?>
                    <?php } else if (gettype($result) == 'double') { ?>
                        <?php echo number_format($result, 5, '.', ' '); ?>
                    <?php } else { ?>
                        <?php echo 'Some went wrong. Please try again later.'; ?>
                    <?php } ?>
            </div>
        <?php endif ?>
    </body>
</html>
