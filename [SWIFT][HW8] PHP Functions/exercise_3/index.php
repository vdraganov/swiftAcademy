
<?php
function calculateFactorial($num)
{
    $factorial = 1;
    do {
        $factorial *= $num;
        $num--;
    } while ($num > 0);

    return $factorial;
}

if (!empty($_POST)) {
    $n = $_POST['number'];

    $result = calculateFactorial($n);
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
            <span class="proviso">Напишете програма, която пресмята n!. Използвайте функция за пресмятането на резултата:</span>
        </header>
        <form class="" action="" method="post">
            <label for="number">Number: </label>
            <input type="number" name="number" value="" required />

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($result)): ?>
            <div class="output">
                <?php if (gettype($result) == 'integer') { ?>
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
