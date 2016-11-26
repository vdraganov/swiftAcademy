
<?php
if (!empty($_POST)) {
    $a = $_POST['aNumber'];
    $b = $_POST['bNumber'];


    function compareTheNumbers($numA, $numB)
    {
        if ($numA > $numB) {
            $str = $numA . ' ' . $numB;
        }
        else if ($numA < $numB) {
            $str = $numB . ' ' . $numA;
        } else if ($numA == $numB) {
            $str = 'a and b are equal';
        } else {
            $str = 'Something went wrong... Try typing some other numebrs.';
        }

        return $str;
    }

    $stringHolder = compareTheNumbers($a, $b);
}
?>

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
            <span class="proviso">Напишете програма, която сравнява две числа и разпечатва по-голямото от тях на първо място и след него по-малкото:</span>
        </header>

        <form class="" action="" method="post">
            <label for="aNumber">a: </label>
            <input type="number" name="aNumber" value="" placeholder="Enter a number">
            <label for="bNumber">b: </label>
            <input type="number" name="bNumber" value="" placeholder="Enter a number">

            <button type="Submit" name="button">See Result</button>
        </form>
        <?php if (isset($stringHolder)): ?>
            <div class="output">
                <?php echo $stringHolder ?>
            </div>
        <?php endif ?>
    </body>
</html>
